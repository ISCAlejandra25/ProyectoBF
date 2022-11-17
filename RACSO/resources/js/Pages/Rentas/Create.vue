<script setup>
    import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
    import { Head } from "@inertiajs/inertia-vue3";
    import BreezeButton from "@/Components/PrimaryButton.vue";
    import { Link } from "@inertiajs/inertia-vue3";
    import { useForm } from "@inertiajs/inertia-vue3";

    const props = defineProps({
        rentas: {
            type: Object,
            default: () => ({}),
        },
    });


    const form = useForm({
        nombre: '',
        nhAdulto: '',
        nhMenor: '',
        cProcedencia: '',
        telefono: '',
        correo: '',
        nomCasa: '',
        fechaIngreso: '',
        fechaSalida: '',

    });

    const submit = () => {
        form.post(route("rentas.store"));
    };
    </script>

    <template>
        <Head title="Renta Create" />

        <BreezeAuthenticatedLayout>
            <template #header>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Renta Create
                </h2>
            </template>

            <div class="py-12">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <form @submit.prevent="submit">

                                <div class="mb-6">
                                    <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <b>Nombre del cliente</b>
                                    </label>
                                    <input type="text" v-model="form.nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" />
                                    <div v-if="form.errors.nombre" class="text-sm text-red-600" >
                                        {{ form.errors.nombre }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="nhAdulto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <b>Num. huespedes Adultos</b>
                                    </label>
                                    <input type="number" v-model="form.nhAdulto" name="nhAdulto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" />
                                    <div v-if="form.errors.nhAdulto" class="text-sm text-red-600" >
                                        {{ form.errors.nhAdulto }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="nhMenor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        <b>Num. huespedes Menores</b>
                                    </label>
                                    <input type="number" v-model="form.nhMenor" name="nhMenor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" />
                                    <div v-if="form.errors.nhMenor" class="text-sm text-red-600" >
                                        {{ form.errors.nhMenor }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="cProcedencia"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        ><b>Ciudad de procedencia</b> </label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.cProcedencia"
                                        name="cProcedencia"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder=""
                                    />
                                    <div
                                        v-if="form.errors.cProcedencia"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.cProcedencia }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="telefono"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        ><b>Num. Telefono</b> </label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.telefono"
                                        name="telefono"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder=""
                                    />
                                    <div
                                        v-if="form.errors.telefono"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.telefono }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="correo"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        ><b>Correo Electronico</b> </label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.correo"
                                        name="correo"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="example@gmail.com"
                                    />
                                    <div
                                        v-if="form.errors.correo"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.correo }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="nomCasa"
                                        class="block mb-2 text-sm form-label font-medium text-gray-900 dark:text-gray-300"
                                        ><b>Nombre de casa arrendar</b></label>
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
                                    <label
                                        for="fechaIngreso"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        ><b> Fecha de ingreso</b> </label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.fechaIngreso"
                                        name="fechaIngreso"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="10/12/2022"
                                    />
                                    <div
                                        v-if="form.errors.fechaIngreso"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.fechaIngreso }}
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label
                                        for="fechaSalida"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        ><b> Fecha de salida</b> </label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.fechaSalida"
                                        name="fechaSalida"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="12/12/2022"
                                    />
                                    <div
                                        v-if="form.errors.fechaSalida"
                                        class="text-sm text-red-600"
                                    >
                                        {{ form.errors.fechaSalida}}
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
