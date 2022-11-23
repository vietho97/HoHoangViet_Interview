<template>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div
                        class="col-lg-5 d-none d-lg-block bg-register-image"
                    ></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">
                                    Create an Account!
                                </h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input
                                            type="text"
                                            class="form-control form-control-user"
                                            name="username"
                                            v-model="form.username"
                                            placeholder="User Name"
                                        />
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input
                                            type="email"
                                            name="email"
                                            v-model="form.email"
                                            class="form-control form-control-user"
                                            placeholder="Email Address"
                                        />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea
                                        type="text"
                                        class="form-control form-control-user"
                                        name="hobbies"
                                        v-model="form.hobbies"
                                        placeholder="Hobbies"
                                    ></textarea>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <input
                                            type="password"
                                            class="form-control form-control-user"
                                            name="password"
                                            v-model="form.password"
                                            placeholder="Password"
                                        />
                                    </div>
                                </div>
                                <a
                                    href="#"
                                    class="btn btn-primary btn-user btn-block"
                                    @click="registerAccount"
                                >
                                    Register Account
                                </a>
                                <hr />
                                <a
                                    href="index.html"
                                    class="btn btn-google btn-user btn-block"
                                >
                                    <i class="fab fa-google fa-fw"></i> Register
                                    with Google
                                </a>
                                <a
                                    href="index.html"
                                    class="btn btn-facebook btn-user btn-block"
                                >
                                    <i class="fab fa-facebook-f fa-fw"></i>
                                    Register with Facebook
                                </a>
                            </form>
                            <hr />
                            <div class="text-center">
                                <a class="small" href="forgot-password.html"
                                    >Forgot Password?</a
                                >
                            </div>
                            <div class="text-center">
                                <a class="small" href="/login"
                                    >Already have an account? Login!</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                username: "",
                email: "",
                password: "",
                hobbies: "",
            },
        };
    },
    mounted() {},
    computed: {},
    watch: {},
    methods: {
        registerAccount() {
            this.getUser(this.form);
        },
        async getUser(form) {
            try {
                const response = await axios.post("/api/register", form);
                console.log(response);
            } catch (error) {
                console.error(error);
            }
        },
    },
};
</script>
