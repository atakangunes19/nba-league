<template>
    <div>
        <!-- title -->
        <div class="text-center p-10">
            <h1 class="font-bold text-4xl mb-4 text-blue-500">INSIDER NBA LEAGUE</h1>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2 float-right">
                <router-link to="/tournament/create">
                    Create Tournament
                </router-link>
            </button>
        </div>

        <section class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-10 gap-x-14 mt-10 mb-5">
            <div v-for="(tournament, index) in tournaments" :key="tournament.id" class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                <router-link :to="'/tournament/' + tournament.id + '/simulation'">
                    <img src="../../assets/images/nba-logo.jpg" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                    <div class="px-4 py-3 w-60">
                        <p class="text-lg font-bold text-black truncate block capitalize">Tournament {{ tournament.id }}</p>
                    </div>
                </router-link>
            </div>
        </section>

    </div>
</template>


<script>
import axios from 'axios';
import Alert from '../Components/_Alert.vue';

export default {
    name: 'HomePage',
    components: { Alert },
    data() {
        return {
            message: "",
            tournaments: []
        };
    },
    async created() {
        await this.loadTournaments();
    },
    methods: {
        async loadTournaments() {
            try {
                const { data } = await axios.get(`/api/tournaments`);
                console.log('hi');
                console.log(data);
                this.tournaments = data;
            } catch (error) {
                // TODO: Implement error handling
                const { response } = error;
                const { data, status } = response;
            }
        }
    }
}
</script>
