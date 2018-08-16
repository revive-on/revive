<template>
    <div>
        <b-card-group deck>
            <card :card-event-value="event_1"></card>
            <card :card-event-value="event_2"></card>
        </b-card-group>
        <b-card-group deck>
            <card :card-event-value="event_3"></card>
            <card :card-event-value="event_4"></card>
        </b-card-group>
    </div>
</template>

<script>
    import Card from './Card.vue';

    export default {
        components: {Card},
        created() {
            let self = this;
            axios.get("/cardEvents/listCardEvents").then(function (response) {
                let data = response.data;
                console.log(data[0]);
                self.event_1 = data[0];
                self.event_2 = data[1];
                self.event_3 = data[2];
                self.event_4 = data[3];
            }).catch(function (ex) {
                // ex 처리
            });
        },
        data() {
            return {
                event_1: [],
                event_2: [],
                event_3: [],
                event_4: []
            }
        }
    }
</script>