<template>
    <div class="container">
        <h3>Requerimiento 2</h3>
            <div class="form-group">
                <label for="modelyear">Model Year</label>
                <input type="number" class="form-control" id="modelyear" placeholder="Model Year" v-model="modelYear">
            </div>
            <div class="form-group">
                <label for="make">Manufacture</label>
                <input type="text" class="form-control" id="make" placeholder="Manufacture" v-model="manufacturer"   >
            </div>
            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" id="model" placeholder="Model" v-model="model"   >
            </div>
            <v-btn color="info" v-on:click="searchItem">Submit</v-btn>
            <div v-if="success" class="alert alert-success ">
                {{ arrayTasks }}
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
        modelYear: '', 
        manufacturer: '', 
        model: '',
        }
        
    },
    methods: {
        searchItem: function() {
            let me = this;

            if (me.modelYear == '' || me.manufacturer == '' || me.model == '') {
                console.log("ok");
                me.success = false;

            } else {
                
                 let url = '/vehicles'; //Ruta que hemos creado para que nos devuelva todas las tareas
                window.axios.post(url, {
                    modelYear: me.modelYear,
                    manufacturer: me.manufacturer,
                    model: me.model,
                }).then(function (response) {
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.arrayTasks = response.data;
                    console.log(me.arrayTasks);
                    me.success = true;
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
