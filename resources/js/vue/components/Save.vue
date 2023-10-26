<template>
    <form @submit.prevent="submit">
        <o-field label="Titulo" :variant="errors.titulo ? 'danger' : 'primary' " :message="errors.titulo" >
            <o-input v-model="form.titulo" ></o-input>
        </o-field>
        <o-field label="Descripcion"  :variant="errors.descripcion ? 'danger' : 'primary' " :message="errors.descripcion">
            <o-input v-model="form.descripcion" type ="textarea"></o-input>
        </o-field>
        <o-field label="Contenido" :variant="errors.contenido ? 'danger' : 'primary' " :message="errors.contenido">
            <o-input v-model="form.contenido" type ="textarea"></o-input>
        </o-field>
        <o-field label="Categoria" :variant="errors.categoria_id ? 'danger' : 'primary' " :message="errors.categoria_id">
            <o-select v-model="form.categoria_id" placeholder="Seleccione una categoria">
                <option v-for="c in categories" v-bind:key="c.id" :value="c.id">{{c.titulo}}</option>
            </o-select>
        </o-field>
        <o-field label="Posted" :variant="errors.posted ? 'danger' : 'primary' " :message="errors.posted">
            <o-select v-model="form.posted" placeholder="Seleccione una opcion">
                <option value="si">si</option>
                <option value="no">no</option>
            </o-select>
        </o-field>
        <o-button variant="primary" native-type="submit" >Enviar</o-button>
    </form>
</template>

<script>
    export default {
        data(){
            return {
                categories:[],
                form:{
                    titulo:"",
                    descripcion:"",
                    contenido:"",
                    posted:"",
                    url:"",
                    categria_id:""  
                },
                errors:{
                    titulo:"",
                    descripcion:"",
                    contenido:"",
                    posted:"",
                    url:"",
                    categria_id:""  
                },
                post: ""
            };
        },
       async mounted() {
            if(this.$route.params.id){
                await this.getPost();
                console.log(this.post);
                this.initPost();
            }           
            this.getCategory();
        },
        methods: { 
            clearErrorForm(){
                this.errors.titulo = "";
                this.errors.descripcion = "";
                this.errors.contenido = "";
                this.errors.posted = "";
                this.errors.categoria_id = "";
            },
            submit(){
                this.clearErrorForm()
                if(this.post == ""){

                    return this.$axios.post("/api/post",
                        this.form
                    ).then(res => {
                        console.log(res);
                    }).catch(error => {
                        console.log(error.response.data)
                        if(error.response.data.titulo)
                            this.errors.titulo = error.response.data.titulo[0]
                        
                        if(error.response.data.descripcion)
                            this.errors.descripcion = error.response.data.descripcion[0]
                        
                        if(error.response.data.contenido)
                            this.errors.contenido = error.response.data.contenido[0]
                        
                        if(error.response.data.posted)
                            this.errors.posted = error.response.data.posted[0]
                        
                        if(error.response.data.categoria_id)
                            this.errors.categoria_id = error.response.data.categoria_id[0]
                        
                    })
                }else{
                    this.$axios.patch("/api/post/"+this.post.id,
                    this.form
                    ).then(res => {
                         console.log(res);
                    }).catch(error => {
                        console.log(error.response.data)
                        if(error.response.data.titulo)
                            this.errors.titulo = error.response.data.titulo[0]
                        
                        if(error.response.data.descripcion)
                            this.errors.descripcion = error.response.data.descripcion[0]
                        
                        if(error.response.data.contenido)
                            this.errors.contenido = error.response.data.contenido[0]
                        
                        if(error.response.data.posted)
                            this.errors.posted = error.response.data.posted[0]
                        
                        if(error.response.data.categoria_id)
                            this.errors.categoria_id = error.response.data.categoria_id[0]
                        
                    })
                        

                }

               

            },
            getCategory(){
                this.$axios.get("/api/category/all").then(res => {
                    this.categories = res.data
                })
            },
            async getPost(){
                this.post = await this.$axios.get("/api/post/id/"+this.$route.params.id)
                this.post = this.post.data
            },
            initPost(){
                this.form.titulo = this.post.titulo
                this.form.descripcion = this.post.descripcion
                this.form.contenido = this.post.contenido
                this.form.posted = this.post.posted
                this.form.categoria_id = this.post.categoria_id
                
                
            }
        }
    }
</script>