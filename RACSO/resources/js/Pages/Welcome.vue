<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import BreezeButton from "@/Components/PrimaryButton.vue";
import { Inertia } from "@inertiajs/inertia";

// defineProps({
//     canLogin: Boolean,
//     canRegister: Boolean,
//     laravelVersion: String,
//     phpVersion: String,

// })
const props = defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
  casas: {
    type: Object,
    default: () => ({}),
  },
});
const form = useForm();

function destroy(id) {
  if (confirm("Esta seguro de eliminar el registro de Casa")) {
    form.delete(route("casas.destroy", id));
  }
}

//  const form = useForm({
//      id: props.casas.id,
//      nomCasa: props.casas.nomCasa,
//      numHabitaciones: props.casas.numHabitaciones,
//      numBanos: props.casas.numBanos,
//      numAlbercas: props.casas.numAlbercas,
//      aC: props.casas.aC,
//      numVentilador: props.casas.numVentilador,
//      numTV: props.casas.numTV,
//      wifi: props.casas.wifi,
//      cochera: props.casas.cochera,
//     direccionCompleta: props.casas.direccionCompleta,
//      descripcion: props.casas.descripcion,
//     imagen: props.casas.imagen,

//  });
// const submit = () => {
//     form.put(route("reportes.update", props.reporte.id));
// };
</script>

<template>
  <Head title="Inicio" />
  <div class="dark:bg-orange-400">
    <div>
      <br />
    </div>

    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
      <div><hr /></div>
      <div class="">
        <v-container fluid>
          <img
            src="./s.jpg"
            alt="Sotelo"
            style="width: 10%"
            class="mx-auto d-block sm:rounded-lg"
          />
        </v-container>
      </div>

      <div class="ml-5">
        <h1><b>RACSO</b></h1>
      </div>
      <div>
        <div>
          <div
            v-if="canLogin"
            class="hidden fixed top-0 right-0 px-6 py-4 sm:block"
          >
            <Link
              v-if="$page.props.auth.user"
              :href="route('dashboard')"
              class="text-sm text-gray-700 dark:text-gray-500 underline"
              >Dashboard</Link
            >

            <template v-else>
              <Link
                :href="route('login')"
                class="text-sm text-gray-700 dark:text-gray-300 underline"
                ><b>Admin</b></Link
              >

              <!-- <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</Link> -->
            </template>
          </div>
        </div>
      </div>
    </div>
    <div
      class="
        relative
        flex
        items-top
        justify-center
        min-h-screen
        bg-gray-100
        dark:bg-black-900
        sm:items-center sm:pt-0
      "
    >
      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div
          class="
            mt-8
            bg-white
            dark:bg-gray-700
            overflow-hidden
            shadow
            sm:rounded-lg
          "
        >
          <div class="grid grid-cols-1 md:grid-cols-2">
            <div
              class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
              <div class="flex items-center">
                <div class="card ml-12">
                  <img src="./Casas/imagenes/casa3pisos.jpg" style="width: 50%" class="card-img-top mx-auto d-block" alt="..."/>
                </div>
              </div>

              <div class="ml-12">
                <div class="card-body">
                    <div class=" text-lg leading-7 font-semibold">
                  <a
                    href="https://laracasts.com"
                    class="underline text-gray-900 dark:text-white"
                    >Casa Sol</a
                  >
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                 </div>
                 <div class="mb-1">
                    <br>
                    <h4 class="text-center text-red-400 dark:text-red text-danger"><b>$2500</b> </h4>
                    <br>
                    <h3 class="text-sm text-lg leading-12 text-right">
                        <div class="mb-12 ">
                     <Link :href="route('casas.create')"><BreezeButton class="bg-orange-400 rounded-lg">Add Casa</BreezeButton></Link>
                 </div>
                    </h3>

                </div>
              </div>
            </div>
            <div
              class="
                p-6
                border-t border-gray-200
                dark:border-gray-700
                md:border-t-0 md:border-l
              "
            >
              <div class="flex items-center">
                <div class="card  ml-12">
                  <img src="./Casas/imagenes/casablanca.jpg" style="width: 50%" class="card-img-top mx-auto d-block" alt="..."/>
                </div>

              </div>

              <div class="ml-12">
                <div class=" text-lg leading-10 font-semibold">
                  <a
                    href="https://laracasts.com"
                    class="underline text-gray-900 dark:text-white"
                    >Casa Sol</a
                  >
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                  Laracasts offers thousands of video tutorials on Laravel, PHP,
                  and JavaScript development. Check them out, see for yourself,
                  and massively level up your development skills in the process.
                </div>
              </div>
            </div>

            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
              <div class="flex items-center">
                <div class="card  ml-12">
                  <img src="./Casas/imagenes/casablanca2.jpg" style="width: 50%" class="card-img-top mx-auto d-block" alt="..."/>
                </div>

              </div>

              <div class="ml-12">
                <div class="card-body">
                    <div class=" text-lg leading-7 font-semibold">
                  <a
                    href="https://laracasts.com"
                    class="underline text-gray-900 dark:text-white"
                    >Casa Bungalow Diana</a
                  >
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                 </div>
              </div>
            </div>

            <div
              class="
                p-6
                border-t border-gray-200
                dark:border-gray-700
                md:border-l
              "
            >
              <div class="flex items-center">
                <div class="card  ml-12">
                  <img src="./Casas/imagenes/casaColibri.jpg" style="width: 50%" class="card-img-top mx-auto d-block" alt="..."/>
                </div>
              </div>

              <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="card-body">
                    <div class=" text-lg leading-7 font-semibold">
                  <a
                    href="https://laracasts.com"
                    class="underline text-gray-900 dark:text-white"
                    >Casa Casita</a
                  >
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                 </div>
                </div>
              </div>
            </div>
            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
              <div class="flex items-center">
                <div class="card  ml-12">
                  <img src="./Casas/imagenes/CasaPlaya.jpg" style="width: 50%" class="card-img-top mx-auto d-block" alt="..."/>
                </div>

              </div>

              <div class="ml-12">
                <div class="card-body">
                    <div class=" text-lg leading-7 font-semibold">
                  <a
                    href="https://laracasts.com"
                    class="underline text-gray-900 dark:text-white"
                    >Casa Bungalow Diana</a
                  >
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                 </div>
              </div>
            </div>

            <div
              class="
                p-6
                border-t border-gray-200
                dark:border-gray-700
                md:border-l
              "
            >
              <div class="flex items-center">
                <div class="card  ml-12">
                  <img src="./Casas/imagenes/casablanca.jpg" style="width: 50%" class="card-img-top mx-auto d-block" alt="..."/>
                </div>

              </div>

              <div class="ml-12">
                <div class="card-body">
                    <div class=" text-lg leading-7 font-semibold">
                  <a
                    href="https://laracasts.com"
                    class="underline text-gray-900 dark:text-white"
                    >Casa Colibri</a
                  >
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                 </div>
              </div>
            </div>
          </div>
        </div>

        <div
          class="flex justify-center mt-4 sm:items-center sm:justify-between"
        >
          <div class="text-center text-sm text-gray-500 sm:text-left">
            <h3><b>Contacto:</b></h3>
            <div class="flex items-center">
              <div class="ml-12">
                <h3>Facebook:</h3>
              </div>
              <div class="ml-4">
                <div class="text-lg leading-7 font-semibold">
                  <a
                    href="https://www.facebook.com/profile.php?id=100060847856298&sk=photos"
                    class="underline text-gray-900 dark:text-white"
                    >Sotelo Admon</a
                  >
                </div>
              </div>
            </div>
            <div class="flex items-center">
              <div class="ml-12">
                <h3>WhatsApp:</h3>
              </div>
              <div class="ml-4">
                <div class="text-lg leading-7 font-semibold">
                  <a
                    href="https://wa.me/c/5213151085249"
                    class="underline text-gray-900 dark:text-white"
                    >Sotelo Admon</a
                  >
                </div>
              </div>
            </div>
          </div>

          <div
            class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0"
          >
            @RACSO 2022
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
