<script setup>
    import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
    import { Head } from "@inertiajs/inertia-vue3";
    import BreezeButton from "@/Components/PrimaryButton.vue";
    import { Link } from "@inertiajs/inertia-vue3";
    import { Inertia } from "@inertiajs/inertia";
    import { useForm } from '@inertiajs/inertia-vue3'

    const props = defineProps({
        rentas: {
            type: Object,
            default: () => ({}),
        },
    });
    const form = useForm();

    function destroy(id) {
        if (confirm("Esta seguro de eliminar el registro de renta")) {
            form.delete(route('rentas.destroy', id));
        }
    }
    </script>

    <template>

      <Head title="Rentas" />

    <BreezeAuthenticatedLayout>
            <template #header>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Rentas Index
                </h2>
            </template>
            <div class="py-12">
                <div class="mx-auto max-w-7xl sm:px-5 lg:px-0">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-100">
                           <div class="mb-2">
                                <Link :href="route('rentas.create')">
                                    <BreezeButton>Add Renta</BreezeButton></Link
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
                                                Nombre
                                            </th>
                                            <th scope="col" class="px-4 py-2">
                                                Num Huesped Adulto
                                            </th>
                                            <th scope="col" class="px-4 py-2">
                                                Num. Huesped Menor
                                            </th>
                                            <th scope="col" class="px-1 py-2">
                                                Ciudad Procedencia
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Telefono
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Correo
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Nom. Casa
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Fecha Ingreso
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                               Fecha Salida
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Edit
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Delete
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="renta in rentas" :key="renta.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-2 py-1 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                {{ renta.id }}
                                            </th>
                                            <th scope="row" class="px-4 py-2 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                {{ renta.nombre }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ renta.nhAdulto }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ renta.nhMenor }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ renta.cProcedencia }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ renta.telefono }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ renta.correo }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ renta.nomCasa }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ renta.fechaIngreso }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ renta.fechaSalida }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <Link :href="
                                                        route(
                                                            'rentas.edit',
                                                            renta.id
                                                        ) "
                                                   class="px-4 py-2 text-white bg-blue-600 rounded-lg" >
                                                   Edit</Link>
                                            </td>
                                            <td class="px-6 py-4">
                                                <BreezeButton
                                                    class="bg-red-700"
                                                    @click="destroy(renta.id)"
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
