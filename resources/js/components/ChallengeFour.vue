<template>
    <div class="container">
        <h3>Requerimiento 4</h3>
            <div class="form-group">
                <label for="modelyear">Model Year</label>
                <input type="number" class="form-control" id="modelyear" placeholder="Model Year" v-model="modelyear">
            </div>
            <div class="form-group">
                <label for="make">Manufacture</label>
                <input type="text" class="form-control" id="make" placeholder="Manufacture" v-model="make"   >
            </div>
            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" id="model" placeholder="Model" v-model="model"   >
            </div>
            <div class="form-group">
                <label for="model">¿You want Crash Rating?<input type="checkbox" class="form-control" id="rating" placeholder="rating" v-model="rating"></label>
                
            </div>
            <v-btn color="info" v-on:click="searchItem">Submit</v-btn>
            <div v-if="success" class="alert alert-success ">
                {{ arrayTasks }}
            </div>
            <div v-if="error" class="alert alert-danger ">
                <p>Debe ingresar todas las variables</p>
                <ul>
                    <li>Model Year: {{modelyear}} </li>
                    <li>Manufacture: {{make}} </li>
                    <li>Model: {{model}} </li>
                </ul>

            </div>
    </div>
    
</template>
<script>
export default {
    data () {
        return {
        fields: {},
        arrayTasks: [],
        success: false,
        error:false,
        modelyear: '', 
        make: '', 
        model: '',
        rating: ''
        }
        
    },
    methods: {
        searchItem: function() {
            let me = this;

            if (me.modelyear == '' || me.make == '' || me.model == '') {
                console.log("ok");
                me.success = false;
                me.error = true;
            } else {
                let url = '/vehicles/' + me.modelyear + '/' + me.make + '/' + me.model + '?withRating=' + me.rating; //Ruta que hemos creado para que nos devuelva todas las tareas
                window.axios.get(url).then(function (response) {
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.arrayTasks = response.data;
                    console.log(me.rating);
                    me.success = true;
                    me.error = false;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            }
        }
    }
};
</script>
