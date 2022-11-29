<script setup>
    import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
    import { Head } from "@inertiajs/inertia-vue3";
    import BreezeButton from "@/Components/PrimaryButton.vue";
    import { Link } from "@inertiajs/inertia-vue3";
    import { useForm } from "@inertiajs/inertia-vue3";

    const props = defineProps({
        casas: {
            type: Object,
            default: () => ({}),
        },
    });


    const form = useForm({
        nomCasa: '',
        numHabitaciones: '',
        numBanos: '',
        numAlbercas: '',
        aC: '',
        numVentilador: '',
        numTV: '',
        wifi: '',
        cochera: '',
        direccionCompleta:'',
        descripcion:'',
        imagen:'',

    });

    const submit = () => {
        form.post(route("casas.store"));
    };
    </script>

<template>
    <Head title="Casa Create" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Casa Create
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit">

                            <div class="mb-6">
                                <label for="nomCasa"
                                    class="block mb-2 text-sm form-label font-medium text-gray-900 dark:text-gray-300"
                                    ><b>Nombre de casa</b></label>
                                <select
                                    type="text"
                                    id="nomCasa"
                                    v-model="form.nomCasa"
                                    name="nomCasa"
                                    class="bg-gray-50 form-select border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Selecciona el nombre de una casa"
                                >
                                    <option selected>Seleccione una casa</option>
                                    <option >Hacienda del mar</option>
                                    <option >Mira Mar</option>
                                </select>
                                <div
                                    v-if="form.errors.nomCasa"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.nomCasa }}
                                </div>

                            </div>
                            <div class="mb-6">
                                <label for="numHabitaciones" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    <b>Num. Habitacione</b>
                                </label>
                                <input type="number" v-model="form.numHabitaciones" name="numHabitaciones" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" />
                                <div v-if="form.errors.numHabitaciones" class="text-sm text-red-600" >
                                    {{ form.errors.numHabitaciones }}
                                </div>
                            </div>
                            <div class="mb-6">
                                <label for="numBanos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    <b>Num. Baños</b>
                                </label>
                                <input type="number" v-model="form.numBanos" name="numBanos" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" />
                                <div v-if="form.errors.numBanos" class="text-sm text-red-600" >
                                    {{ form.errors.numBanos }}
                                </div>
                            </div>
                            <div class="mb-6">
                                <label
                                    for="numAlbercas"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    ><b>Num. Albercas</b> </label
                                >
                                <input
                                    type="number"
                                    v-model="form.numAlbercas"
                                    name="numAlbercas"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.numAlbercas"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.numAlbercas }}
                                </div>
                            </div>
                            <div class="mb-6">
                                <label
                                    for="aC"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    ><b>A/C</b> </label
                                >
                                <input
                                    type="text"
                                    v-model="form.aC"
                                    name="aC"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.aC"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.aC }}
                                </div>
                            </div>
                            <div class="mb-6">
                                <label
                                    for="numVentilador"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    ><b>Num. Ventilador</b> </label
                                >
                                <input
                                    type="number"
                                    v-model="form.numVentilador"
                                    name="numVentilador"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.numVentilador"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.numVentilador }}
                                </div>
                            </div>

                            <div class="mb-6">
                                <label
                                    for="numTV"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    ><b> Num. TV</b> </label
                                >
                                <input
                                    type="number"
                                    v-model="form.numTV"
                                    name="numTV"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.numTV"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.numTV }}
                                </div>
                            </div>
                            <div class="mb-6">
                                <label
                                    for="wifi"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    ><b> WiFi</b> </label
                                >
                                <input
                                    type="text"
                                    v-model="form.wifi"
                                    name="wifi"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.wifi"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.wifi}}
                                </div>
                            </div>
                            <div class="mb-6">
                                <label
                                    for="cochera"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    ><b> Cochera</b> </label
                                >
                                <input
                                    type="text"
                                    v-model="form.cochera"
                                    name="cochera"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.cochera"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.cochera}}
                                </div>
                            </div>
                            <div class="mb-6">
                                <label
                                    for="direccionCompleta"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    ><b> Dirección Completa</b> </label
                                >
                                <input
                                    type="text"
                                    v-model="form.direccionCompleta"
                                    name="direccionCompleta"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.direccionCompleta"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.direccionCompleta}}
                                </div>
                            </div>
                            <div class="mb-6">
                                    <label
                                        for="descripcion"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        ><b>Descripción</b></label
                                    >
                                    <textarea
                                        type="text"
                                        v-model="form.descripcion"
                                        name="descripcion"
                                        id=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    ></textarea>
                                    <div
                                        v-if="form.errors.descripcion"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.descripcion }}
                                    </div>
                            </div>

                            <div class="mb-6">
                                <label
                                    for="imagen"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    ><b>Imagen</b> </label
                                >
                                <div class="mb-3">
                                     <input
                                        type="File"
                                        v-model="form.imagen"
                                        name="imagen"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder=""
                                    />
                                </div>

                                <div
                                    v-if="form.errors.imagen"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.imagen}}
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
