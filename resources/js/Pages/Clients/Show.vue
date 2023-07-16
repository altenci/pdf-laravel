<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    client: Object
})

let bal = Number(props.client.initial_deposit);

</script>

<template>
    <Head title="View Client" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">View Client</h2>
                <div class="flex items-center space-x-2">
                    <Link :href="'/clients/email/' + client.id" class="flex items-center space-x-2 px-2 py-1 bg-gray-100 hover:bg-gray-400 rounded-md">
                        <svg fill="#000000" height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 493.497 493.497" xml:space="preserve">
                        <path d="M444.556,85.218H48.942C21.954,85.218,0,107.171,0,134.16v225.177c0,26.988,21.954,48.942,48.942,48.942h395.613
                            c26.988,0,48.941-21.954,48.941-48.942V134.16C493.497,107.171,471.544,85.218,444.556,85.218z M460.87,134.16v225.177
                            c0,2.574-0.725,4.924-1.793,7.09L343.74,251.081l117.097-117.097C460.837,134.049,460.87,134.096,460.87,134.16z M32.628,359.336
                            V134.16c0-0.064,0.033-0.11,0.033-0.175l117.097,117.097L34.413,366.426C33.353,364.26,32.628,361.911,32.628,359.336z
                            M251.784,296.902c-2.692,2.691-7.378,2.691-10.07,0L62.667,117.846h368.172L251.784,296.902z M172.827,274.152l45.818,45.819
                            c7.512,7.511,17.493,11.645,28.104,11.645c10.61,0,20.592-4.134,28.104-11.645l45.82-45.819l101.49,101.499H71.327L172.827,274.152z
                            "/>
                        </svg>
                        <span>Send Email</span>
                    </Link>
                    <a :href="'/clients/pdf/' + client.id" class="flex items-center space-x-2 px-2 py-1 bg-gray-100 hover:bg-gray-400 rounded-md" target="_blank">
                        <span>Export PDF</span>
                    </a>
                </div>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-between">
                <div class="bg-white p-4 rounded shadow w-[30%]">
                    <h4 class="text-2xl mb-3 ">Client Info</h4>
                    <hr>
                    <table class="min-w-[100%] table">
                        <thead>
                            <tr>
                                <th>Last Name</th>
                                <td>{{ client.last_name }}</td>
                            </tr>
                            <tr>
                                <th>First Name</th>
                                <td>{{ client.first_name }}</td>
                            </tr>
                            <tr>
                                <th>Middle Name</th>
                                <td>{{ client.middle_name }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ client.address }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ client.phone_number }}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="bg-white p-4 rounded shadow w-[68%]">
                    <h4 class="text-2xl mb-3">Transaction Log</h4>

                    <table class="table table-auto min-w-[100%] ">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Deposit</th>
                                <th>Withdrawal</th>
                                <th>Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3">Beginning Balance</td>
                                <td class="text-right">{{ (+client.initial_deposit).toLocaleString('en-US') }}</td>
                            </tr>
                            <tr v-for="txn in client.transactions" :key="txn.id">
                                <td>{{ txn.date }}</td>
                                <td class="text-right">{{ txn.deposit ? (+txn.amount).toLocaleString('en-US') : '&nbsp;' }}</td>
                                <td class="text-right">{{ !txn.deposit ? (+txn.amount).toLocaleString('en-US') : '&nbsp;' }}</td>
                                <td class="text-right">{{ (bal+= txn.deposit ? Number(txn.amount) : (0-txn.amount)).toLocaleString('en-US') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
