<template>

    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2 float-right" @click="generateFixture">
                <router-link to="/tournament/create">
                    Create Tournament
                </router-link>
            </button>
            <h1 class="font-bold text-2xl mb-4 ">TEAMS</h1>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Group Name
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Team Name
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Team Power (0-100)
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="team in teams">
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex">
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ team.group_name }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{ team.name }}</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    <input type="number" placeholder="Team Power" v-model="team.power"
                                           class="w-full block border placeholder-gray-500 px-3 py-2 leading-6 rounded-lg border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:focus:border-blue-500 dark:placeholder-gray-400">
                                </p>
                            </td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import axios from 'axios';
import Alert from '../Components/_Alert.vue';

export default {
    name: 'TournamentCreate',
    components: { Alert },
    data() {
        return {
            teams: []
        };
    },
    async created() {
        await this.loadClubs();
    },
    methods: {
        async loadClubs() {
            try {
                const { data } = await axios.get(`/api/club/clubs`);
                this.teams = data;
            } catch (error) {
                // TODO: Implement error handling
                const { response } = error;
                const { data, status } = response;
            }
        },
        async generateFixture() {
            try {
                const { data } = await axios.post('/api/tournaments', { teams: this.teams });
                this.$router.push(`/tournament/${data[0].tournament_id}/simulation`);
            } catch (error) {
                // TODO: Implement error handling
                const { response } = error;
                const { data, status } = response;
            }
        }
    }
}
</script>
