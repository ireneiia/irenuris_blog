<template>
    <div class="mt-5" >
        <h1>Listado de post</h1>
        <o-button iconLeft="plus" @click="$router.push.push({name:'save'})" >Nuevo</o-button>
        <div class="mb-5">
            <section>
                <o-table :loading='isLoading' :data="posts.current_page && posts.data.length == 0 ? [] : posts.data">
                    <o-table-column field="id" label="ID" numeric v-slot="p">
                        {{p.row.id}}
                    </o-table-column>

                    <o-table-column field="titulo" label="Titulo" v-slot="p">
                        {{p.row.titulo}}
                    </o-table-column>

                    <o-table-column field="posted" label="Posted" v-slot="p">
                        {{p.row.posted}}
                    </o-table-column>

                    <o-table-column field="categoria" label="Categoria" v-slot="p">
                        {{p.row.categoria.titulo}}
                    </o-table-column>

                    <o-table-column field="created_at" label="Fecha" v-slot="p">
                        {{p.row.created_at}}
                    </o-table-column>

                    <o-table-column field="url" label="Acciones" v-slot="p">
                        <router-link class="mr-3"  :to="{name:'save' , params:{'id':p.row.id} }">Editar</router-link>
                        <o-button iconLeft="delete" size="small" variant="danger" @click="deletePost(p)" >Eliminar</o-button>
                    
                    </o-table-column>

                </o-table>
                <br>
                <o-pagination
                v-if="posts.current_page && posts.data.length > 0 "
                @change="updatePage" 
                    :total="posts.total"
                    v-model:current="currentPage"
                    :range-before="2"
                    :range-after="3"
                    order="centered"
                    size="small"
                    :simple="false"
                    :rounded="false"
                    :per-page="posts.per_page"
                > 
                
                </o-pagination>

            </section>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            posts: [],
            isLoading: true,
            currentPage:1,
        }
    },
    methods:{
        updatePage(){
            setTimeout(this.listPage,100);
        },
        listPage(){
                this.isLoading = true;
                this.$axios.get("/api/post?page="+this.currentPage).then((res) => {
                this.posts = res.data;
                this.isLoading =  false;
            });
        },
        deletePost (row){
            this.posts.data.splice(row.index,1)
            this.$axios.delete("/api/post/"+row.row.id);

        }
    }, 
    
    async mounted () {
        this.listPage(); 

    }
}
</script>