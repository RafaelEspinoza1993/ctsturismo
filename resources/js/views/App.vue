<template>
    <v-app>
        <v-toolbar app class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" >
                    <router-link tag="li" to="/" class="nav-item"> <a class="nav-link" href="#">ChallengeOne </a> </router-link>
                    
                    <router-link tag="li" to="/ChallengeTwo" class="nav-item"> <a class="nav-link" href="#">ChallengeTwo </a> </router-link>
                    
                    <router-link tag="li" to="/ChallengeThree" class="nav-item"> <a class="nav-link" href="#">ChallengeThree </a> </router-link>

                    <router-link tag="li" to="/ChallengeFour" class="nav-item"> <a class="nav-link" href="#">ChallengeFour </a> </router-link>
                </ul>
            </div>
            
        </v-toolbar>
        <v-content>
            <v-container fluid>
                <router-view ></router-view>
            </v-container>
        </v-content>
        <v-footer app></v-footer>
    </v-app>
</template>
<script>
export default {
    
};
</script>

