<script setup>
    import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
    import { Head } from "@inertiajs/inertia-vue3";
    import BreezeButton from "@/Components/PrimaryButton.vue";
    import { Link } from "@inertiajs/inertia-vue3";
    import { useForm } from "@inertiajs/inertia-vue3";

    const props = defineProps({
        reportes: {
            type: Object,
            default: () => ({}),
        },
    });


    const form = useForm({
        gasReparacion: '',
        gasInternet: '',
        gasTV: '',
        suelLimpieza: '',
        gasMantenimiento: '',
        gasComicionable: '',
        Fecha:''


    });

    const submit = () => {
        form.post(route("reportes.store"));
    };
    </script>

    <template>
        <Head title="R Create" />

        <BreezeAuthenticatedLayout>
            <template #header>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Crear - Reporte General del mes
                </h2>
            </template>

            <div class="py-12">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <form @submit.prevent="submit">

                                <div class="mb-6">
                                    <label for="gasReparacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <b>Gasto de Reparacion</b>
                                    </label>
                                    <input type="text" v-model="form.gasReparacion" name="gasReparacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="$" />
                                    <div v-if="form.errors.gasReparacion" class="text-sm text-red-600" >
                                        {{ form.errors.gasReparacion }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="gasInternet" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <b>Gasto de Internet</b>
                                    </label>
                                    <input type="text" v-model="form.gasInternet" name="gasInternet" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="$" />
                                    <div v-if="form.errors.gasInternet" class="text-sm text-red-600" >
                                        {{ form.errors.gasInternet }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="gasTV" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <b>Gastos de TV</b>
                                    </label>
                                    <input type="text" v-model="form.gasTV" name="gasTV" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="$" />
                                    <div v-if="form.errors.gasTV" class="text-sm text-red-600" >
                                        {{ form.errors.gasTV }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="suelLimpieza"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        ><b>Sueldo para limpieza</b> </label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.suelLimpieza"
                                        name="suelLimpieza"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="$"
                                    />
                                    <div
                                        v-if="form.errors.suelLimpieza"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.suelLimpieza }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="gasMantenimiento"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        ><b>Gasto de Mantenimiento</b> </label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.gasMantenimiento"
                                        name="gasMantenimiento"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="$"
                                    />
                                    <div
                                        v-if="form.errors.gasMantenimiento"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.gasMantenimiento }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="gasComicionable"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        ><b>Comicionable</b> </label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.gasComicionable"
                                        name="gasComicionable"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="$"
                                    />
                                    <div
                                        v-if="form.errors.gasComicionable"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.gasComicionable }}
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <label
                                        for="Fecha"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        ><b> Fecha</b> </label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.Fecha"
                                        name="Fecha"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="10/12/2022"
                                    />
                                    <div
                                        v-if="form.errors.Fecha"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.Fecha }}
                                    </div>
                                </div>

                                <button
                                    type="guardar"
                                    class="text-white bg-blue-700  justify-content-md-end focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 "
                                    :disabled="form.processing"
                                    :class="{ 'opacity-25': form.processing }"
                                >
                                    Guardar
                                </button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </BreezeAuthenticatedLayout>
    </template>
