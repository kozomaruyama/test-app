<template>
    <v-app id="inspire">
        <v-system-bar>
            <v-spacer></v-spacer>

            <v-icon>mdi-square</v-icon>

            <v-icon>mdi-circle</v-icon>

            <v-icon>mdi-triangle</v-icon>
        </v-system-bar>

        <v-navigation-drawer v-model="drawer">
            <v-sheet color="grey-lighten-4" class="pa-4">
                <v-avatar
                    class="mb-4"
                    color="grey-darken-1"
                    size="64"
                ></v-avatar>

                <div>john@google.com</div>
            </v-sheet>

            <v-divider></v-divider>

            <v-list>
                <v-list-item v-for="[icon, text] in links" :key="icon" link>
                    <template v-slot:prepend>
                        <v-icon>{{ icon }}</v-icon>
                    </template>

                    <v-list-item-title>{{ text }}</v-list-item-title>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-main>
            <v-container class="py-8 px-6" fluid>
                <v-row>
                    <v-col v-for="card in cards" :key="card" cols="12">
                        <v-card>
                            <v-list lines="two">
                                <v-list-subheader>{{ card }}</v-list-subheader>

                                <template v-for="test in tests" :key="test.id">
                                    <v-list-item>
                                        <template v-slot:prepend>
                                            <v-avatar
                                                color="grey-darken-1"
                                            ></v-avatar>
                                        </template>

                                        <v-list-item-title>
                                            {{ test.text }}
                                        </v-list-item-title>
                                    </v-list-item>

                                    <v-divider
                                        v-if="test.id !== 6"
                                        :key="`divider-${test.id}`"
                                        inset
                                    ></v-divider>
                                </template>
                            </v-list>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>
    </v-app>
</template>

<script setup>
import { ref } from "vue";

// コントローラーから渡された値を受け取る
defineProps({
    tests: {
        type: String,
        required: true,
    },
});

const cards = ["Today", "Yesterday"];
const links = [
    ["mdi-inbox-arrow-down", "Inbox"],
    ["mdi-send", "Send"],
    ["mdi-delete", "Trash"],
    ["mdi-alert-octagon", "Spam"],
];

const drawer = ref(null);
</script>

