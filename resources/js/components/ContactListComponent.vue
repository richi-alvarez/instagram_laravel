<template>
    <div>
        <b-form class="my-3 mx-2"> 
            <b-form-input class="text-center"
                type="text"
                placeholder="Buscando contacto...">
            </b-form-input>
        </b-form>
        <b-list-group>
            <contact-component variant="dark">
                <b-row class="p-2" align-h="center">
                    <b-col cols="12" md="3" class="text-center">
                        <b-img rounded="circle" 
                            blank with="60" 
                            height="60" 
                            blank-color="#777"
                            alt="img" class="m-1"/>
                    </b-col>
                    <b-col cols="6" align-self="center" class="d-none d-md-block">
                        <p class="mb-1">Juan Ramos</p>
                        <p class="text-muted small mb-1">tú: hasta luego!</p>
                    </b-col>
                    <b-col cols="3" class="d-none d-md-block">
                        <p class="text-muted small">1:37 pm</p>
                    </b-col>
                </b-row>
            </contact-component>
            <contact-component variant="">
                <b-row class="p-2" align-h="center">
                    <b-col cols="12" md="3" class="text-center">
                        <b-img rounded="circle" 
                            blank with="60" 
                            height="60" 
                            blank-color="#777"
                            alt="img" class="m-1"/>
                    </b-col>
                    <b-col cols="6" align-self="center" class="d-none d-md-block">
                        <p class="mb-1">Juan Ramos</p>
                        <p class="text-muted small mb-1">tú: hasta luego!</p>
                    </b-col>
                    <b-col cols="3" class="d-none d-md-block">
                        <p class="text-muted small">1:37 pm</p>
                    </b-col>
                </b-row>
            </contact-component>
            <contact-component variant="secondary">
                <b-row class="p-2" align-h="center">
                    <b-col cols="12" md="3" class="text-center">
                        <b-img rounded="circle" 
                            blank with="60" 
                            height="60" 
                            blank-color="#777"
                            alt="img" class="m-1"/>
                    </b-col>
                    <b-col cols="6" align-self="center" class="d-none d-md-block">
                        <p class="mb-1">Juan Ramos</p>
                        <p class="text-muted small mb-1">tú: hasta luego!</p>
                    </b-col>
                    <b-col cols="3" class="d-none d-md-block">
                        <p class="text-muted small">1:37 pm</p>
                    </b-col>
                </b-row>
            </contact-component>
        </b-list-group>
    </div>
</template>

<script>
    export default {

        data(){
            return{

            };
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
