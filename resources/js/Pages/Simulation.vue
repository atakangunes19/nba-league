<template>
    <div class="flex items-center justify-between">
        <h3 class="font-bold text-4xl mb-4 text-blue-500">Minute Count {{ minuteCount }} / 48</h3>
    </div>
    <p>All matches will start at the same time and will last 48 minutes and every minute will be simulated as 5
        seconds which means whole match will end in 240 seconds.</p>
    <div class="space-y-8 dark:text-gray-100">
        <div class="p-5">
            <div class="grid grid-cols-3 gap-4 grid-flow-row grid-">
                <div class="p-5 text-center bg-white" v-for="competition in competitions">
                    <table class="min-w-full text-sm align-middle whitespace-nowrap">
                        <tbody>
                                <tr class="border-b border-gray-100 dark:border-gray-700/50">
                                    <td class="p-3">
                                        {{ matches[competition.home_team_id] }}
                                    </td>
                                    <td class="p-3">
                                        {{ competition.home_team_score }} - {{ competition.away_team_score }}
                                    </td>
                                    <td class="p-3 text-end">
                                        {{ matches[competition.away_team_id] }}
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
import { useRoute } from 'vue-router'

export default {
    name: 'Simulation',
    components: {  },
    data() {
        return {
            minuteCount: 0,
            awaiting: false,
            competitions: [],
            matches: [],
            isActive: true,
        };
    },
    async created() {
        const route = useRoute();
        await this.loadResult();
    },
    methods: {
        async loadResult() {
            this.awaiting = true;
            try {
                const { data } = await axios.get(`/api/tournaments/${this.$route.params.id}/simulation/result`);

                function sleep(ms) {
                    return new Promise(resolve => setTimeout(resolve, ms));
                }

                sleep(5000).then(() => {
                    if(this.minuteCount <=5){
                        this.competitions = data.competitions;
                        this.matches = data.matches;
                        this.minuteCount++;
                        this.playNextMinute();
                    }
                    console.log(this.minuteCount);
                });


            }
            finally {
                this.awaiting = false;
            }
        },
        async playNextMinute() {
            this.awaiting = true;
            try {
                await axios.post(`/api/tournaments/${this.$route.params.id}/simulation/play-next-minute`);
                await this.loadResult();
            }
            finally {
                this.awaiting = false;
            }
        }
    }
}
</script>
