
var hostName = 'http://localhost/ale-proyectro/public/';
//var api = new consumoAPI();
var api = hostName+'api/clientes';

new Vue({
    el :'#app',
    data: {
        clientes : [],
        cliente : {
            "codigo":0,
            "nombre":"",
            "apellido":"",
            "estado":"",
            "creado":""
        }
    },
    methods: {
        getClientes: function(){
           this.$http.get(api).then(function(response){
                this.clientes = response.data;
           });
        },
        deleteCliente: function(id){
            this.$http.delete(api+'/'+id).then(function(response){    
            });
             this.$http.get(api).then(function(response){
                 this.clientes = response.data;
            });
        },
        getCliente: function(id){
            this.$http.get(api+'/'+id).then(function(response){
                this.cliente = response.data;
            });
        },
        saveCliente : function(){
            console.log('save cliente');
            if(this.cliente.codigo === 0 ){
                this.$http.post(api,this.cliente).then(function(response){
                    this.$http.get(api).then(function(response){
                        this.clientes = response.data;
                   });
                });
            }else{
                this.$http.put(api+'/'+this.cliente.codigo,this.cliente).then(function(response){
                    this.$http.get(api).then(function(response){
                        this.clientes = response.data;
                   });
                });
            }
           
        },

        cleanCliente : function(){
            this.cliente = {
                "codigo":0,
                "nombre":"",
                "apellido":"",
                "estado":"",
                "creado":""
            };
        }
    },
    created : function(){
        this.getClientes();
    } 
});
