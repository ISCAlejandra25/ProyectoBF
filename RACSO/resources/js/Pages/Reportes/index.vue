<script setup>
    import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
    import { Head } from "@inertiajs/inertia-vue3";
    import BreezeButton from "@/Components/PrimaryButton.vue";
    import { Link } from "@inertiajs/inertia-vue3";
    import { Inertia } from "@inertiajs/inertia";
    import { useForm } from '@inertiajs/inertia-vue3'

    const props = defineProps({
        reportes: {
            type: Object,
            default: () => ({}),
        },
    });
    const form = useForm();

    function destroy(id) {
        if (confirm("Esta seguro de eliminar el registro de reporte")) {
            form.delete(route('reportes.destroy', id));
        }
    }
    </script>

    <template>

      <Head title="Reportes" />

    <BreezeAuthenticatedLayout>
            <template #header>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Reportes Index
                </h2>
            </template>
            <div class="py-12">
                <div class="mx-auto max-w-7xl sm:px-5 lg:px-0">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-100">
                           <div class="mb-2">
                                <Link :href="route('reportes.create')">
                                    <BreezeButton>Add Reporte</BreezeButton></Link
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
                                                Gastos reparacion
                                            </th>
                                            <th scope="col" class="px-4 py-2">
                                                Gastos Internet
                                            </th>
                                            <th scope="col" class="px-4 py-2">
                                                Gastos TV
                                            </th>
                                            <th scope="col" class="px-1 py-2">
                                                Sueldo Limpieza
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Gasto Mantenimiento
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Gasto comicionable
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Fecha
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Edit
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Visualizar
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Delete
                                            </th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        <tr v-for="reporte in reportes" :key="reportes.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-2 py-1 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                {{ reporte.id }}
                                            </th>
                                            <th scope="row" class="px-4 py-2 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                {{ reporte.gasReparacion }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ reporte.gasInternet }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ reporte.gasTV }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ reporte.suelLimpieza }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ reporte.gasMantenimiento }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ reporte.gasComicionable }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ reporte.Fecha }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <Link :href="
                                                        route(
                                                            'reportes.edit',
                                                            reporte.id
                                                        ) "
                                                   class="px-4 py-2 text-white bg-blue-600 rounded-lg" >
                                                   Edit</Link>
                                            </td>
                                            <td class="px-6 py-4">
                                                <Link :href="
                                                        route(
                                                            'reportes.show',
                                                            reporte.id
                                                        ) "
                                                   class="px-4 py-2 text-white bg-blue-600 rounded-lg" >
                                                   Ver</Link>
                                            </td>
                                            <td class="px-6 py-4">
                                                <BreezeButton
                                                    class="bg-red-700"
                                                    @click="destroy(reporte.id)"
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
