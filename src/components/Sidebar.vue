<template>
    <v-navigation-drawer
            v-model="drawer"
            app
            clipped
    >
        <v-list dense>
            <v-list-item
                    v-for="item in items"
                    :key="item.text"
                    :to="item.link"
            >
                <v-list-item-action>
                    <v-icon>{{ item.icon }}</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                    <v-list-item-title>
                        {{ item.text }}
                    </v-list-item-title>
                </v-list-item-content>
            </v-list-item>

            <v-subheader class="mt-4 grey--text text--darken-1">SUBSCRIPTIONS</v-subheader>

            <v-list-item
                    class="mt-4"
                    @click=""
            >
                <v-list-item-action>
                    <v-icon color="grey darken-1">mdi-plus-circle-outline</v-icon>
                </v-list-item-action>
                <v-list-item-title class="grey--text text--darken-1">Browse Channels</v-list-item-title>
            </v-list-item>

            <v-list-item @click="">
                <v-list-item-action>
                    <v-icon color="grey darken-1">mdi-settings</v-icon>
                </v-list-item-action>
                <v-list-item-title class="grey--text text--darken-1">Manage Subscriptions</v-list-item-title>
            </v-list-item>
        </v-list>
    </v-navigation-drawer>

</template>

<script>
    export default {
        name: "Sidebar",
        props: {
        },
        data: () => ({
            drawer: null,
            items: [
                { icon: 'trending_up', text: 'Home', link:'/' },
                { icon: 'subscriptions', text: 'About', link:'/about' },
            ],
            items2: [
                { picture: 28, text: 'Joseph' },
                { picture: 38, text: 'Apple' },
                { picture: 48, text: 'Xbox Ahoy' },
                { picture: 58, text: 'Nokia' },
                { picture: 78, text: 'MKBHD' },
            ],
        }),
        created () {
            this.$vuetify.theme.dark = true
        },
    }
</script>

<style scoped>

</style>
