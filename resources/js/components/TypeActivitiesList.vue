<template>
    <section>
        <h5 class="title is-5">פירוט תשלומים ({{collapses.length}})</h5>
        <b-collapse
            class="card"
            v-for="(collapse, index) of collapses"
            :key="index"
            :open="isOpen === index"
            @open="isOpen = index">
            <div
                slot="trigger"
                slot-scope="props"
                class="card-header"
                role="button">
                <p class="card-header-title">
                    סכום: {{ collapse.amount }}
                </p>
                <a class="card-header-icon">
                    <b-icon
                        :icon="props.open ? 'menu-down' : 'menu-up'">
                    </b-icon>
                </a>
            </div>
            <div class="card-content">
                <div class="content">
                    מידע נוסף: {{ collapse.info }}
                    <hr>
                    מספר אישור תשלום: {{collapse.confirmation}}
                    <hr>
                    עבור חשבונית מספר: {{collapse.bill_id}}
                    <hr>
                    שולם בתאריך: {{collapse.paid_at}}
                </div>
            </div>
        </b-collapse>

    </section>
</template>

<script>
    export default {
        data() {
            return {
                isOpen: 0,
                collapses: []
            }
        },

        mounted() {
            this.collapses = window.balance.typeActivitiesList
        }
    }
</script>
