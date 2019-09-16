<template>
    <v-app id="inspire">

        <Sidebar />

        <v-app-bar
                app
                clipped-left
                color="blue"
                dense
        >
            <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-icon class="mx-4">fab fa-youtube</v-icon>
            <v-toolbar-title class="mr-12 align-center">
                <span class="title">Youtube</span>
            </v-toolbar-title>
            <div class="flex-grow-1"></div>
            <v-row
                    align="center"
                    style="max-width: 650px"
            >
                <v-text-field
                        :append-icon-cb="() => {}"
                        placeholder="Search..."
                        single-line
                        append-icon="search"
                        color="white"
                        hide-details
                ></v-text-field>
            </v-row>
        </v-app-bar>

        <v-content>
            <v-container class="fill-height">
                <v-row
                        justify="center"
                        align="center"
                >
                    <v-col class="shrink">
                        <main>
                            <div class="app-page">
                                <router-view />
                            </div>
                        </main>
                    </v-col>
                </v-row>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
    import Sidebar from "@/components/Sidebar";

    export default {
        name: "main-layout",
        props: {
            source: String,
        },
        data: () => ({
            drawer: null
        }),
        created () {
            this.$vuetify.theme.dark = true
        },
        components: {
            Sidebar
        }
    }
</script>

<style scoped>

</style>
