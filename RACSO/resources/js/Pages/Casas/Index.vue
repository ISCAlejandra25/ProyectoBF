<script setup>
    import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
    import { Head } from "@inertiajs/inertia-vue3";
    import BreezeButton from "@/Components/PrimaryButton.vue";
    import { Link } from "@inertiajs/inertia-vue3";
    import { Inertia } from "@inertiajs/inertia";
    import { useForm } from '@inertiajs/inertia-vue3'

    const props = defineProps({
        casas: {
            type: Object,
            default: () => ({}),
        },
    });
    const form = useForm();

    function destroy(id) {
        if (confirm("Esta seguro de eliminar el registro de Casa")) {
            form.delete(route('casas.destroy', id));
        }
    }
    </script>

    <template>

      <Head title="Casas" />

    <BreezeAuthenticatedLayout>
            <template #header>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Casas Index
                </h2>
            </template>
            <div class="py-12">
                <div class="mx-auto max-w-7xl sm:px-5 lg:px-0">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-100">
                           <div class="mb-2">
                                <Link :href="route('casas.create')">
                                    <BreezeButton>Add Casa</BreezeButton></Link
                                >
                            </div>
                             <div
                                class="relative overflow-x-auto shadow-md sm:rounded-lg"
                            >
                                <table
                                    class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                                >
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                                    >
                                        <tr>
                                            <th scope="col" class="px-2 py-1">#</th>
                                            <th scope="col" class="px-3 py-2">
                                                Nom. Casa
                                            </th>
                                            <th scope="col" class="px-4 py-2">
                                                Num. Habitación
                                            </th>
                                            <th scope="col" class="px-4 py-2">
                                                Num. Baños
                                            </th>
                                            <th scope="col" class="px-1 py-2">
                                                Num. Albercas
                                            </th>
                                            <th scope="col" class="px-4 py-3">
                                                A/C
                                            </th>
                                            <th scope="col" class="px-4 py-3">
                                                Num. Ventilador
                                            </th>
                                            <th scope="col" class="px-4 py-3">
                                                Num. TV
                                            </th>
                                            <th scope="col" class="px-4 py-3">
                                                WiFi
                                            </th>
                                            <th scope="col" class="px-4 py-3">
                                               Cochera
                                            </th>
                                            <th scope="col" class="px-4 py-3">
                                               Dirección
                                            </th>
                                            <th scope="col" class="px-4 py-3">
                                               Descripcion
                                            </th>
                                            <th scope="col" class="px-4 py-3">
                                               imagen
                                            </th>
                                            <th scope="col" class="px-4 py-3">
                                                Edit
                                            </th>
                                            <th scope="col" class="px-4 py-3">
                                                Delete
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="casa in casas" :key="casa.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-2 py-1 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                {{ casa.id }}
                                            </th>
                                            <th class="px-3 py-2">
                                                {{ casa.nomCasa }}
                                            </th>
                                            <td class="px-3 py-2">
                                                {{ casa.numHabitaciones }}
                                            </td>
                                            <td class="px-3 py-2">
                                                {{ casa.numBanos }}
                                            </td>
                                            <td class="px-3 py-2">
                                                {{ casa.numAlbercas }}
                                            </td>
                                            <td class="px-3 py-2">
                                                {{ casa.aC }}
                                            </td>
                                            <td class="px-3 py-2">
                                                {{ casa.numVentilador }}
                                            </td>
                                            <td class="px-3 py-2">
                                                {{ casa.numTV }}
                                            </td>
                                            <td class="px-3 py-2">
                                                {{ casa.wifi }}
                                            </td>
                                            <td class="px-3 py-2">
                                                {{ casa.cochera }}
                                            </td>
                                            <td class="px-3 py-2">
                                                {{ casa.direccionCompleta }}
                                            </td>
                                            <td class="px-6 py-2">
                                                {{ casa.descripcion }}
                                            </td>
                                            <td class="px-6 py-2">
                                                <v-container fluid>
                                                     <img src="{{ casa.imagen }}" alt="Sotelo" style="width:10%" class="mx-auto d-block" />
                                                </v-container>
                                            </td>
                                            <td class="px-3 py-1">
                                                <Link :href="
                                                        route(
                                                            'casas.edit',
                                                            casa.id
                                                        ) "
                                                   class="px-3 py-2 text-white bg-blue-600 rounded-lg" >
                                                   Edit</Link>
                                            </td>
                                            <td class="px-3 py-1">
                                                <BreezeButton
                                                    class="bg-red-700 px-3 py-2"
                                                    @click="destroy(casa.id)"
                                                >
                                                    Delete
                                                </BreezeButton>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </BreezeAuthenticatedLayout>
    </template>
