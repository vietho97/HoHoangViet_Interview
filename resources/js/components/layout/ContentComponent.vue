<template>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div
                        id="dataTable_wrapper"
                        class="dataTables_wrapper dt-bootstrap4"
                    >
                        <div class="row">
                            <div class="col-sm-12">
                                <table
                                    class="table table-bordered dataTable"
                                    id="dataTable"
                                    width="100%"
                                    cellspacing="0"
                                    role="grid"
                                    aria-describedby="dataTable_info"
                                    style="width: 100%"
                                >
                                    <thead>
                                        <tr role="row">
                                            <th
                                                class="sorting sorting_asc"
                                                tabindex="0"
                                                aria-controls="dataTable"
                                                aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending"
                                            >
                                                User Name
                                            </th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="dataTable"
                                                aria-label="Position: activate to sort column ascending"
                                            >
                                                Email
                                            </th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="dataTable"
                                                aria-label="Office: activate to sort column ascending"
                                            >
                                                Hobbies
                                            </th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="dataTable"
                                                aria-label="Age: activate to sort column ascending"
                                            >
                                                Created Date
                                            </th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="dataTable"
                                                aria-label="Start date: activate to sort column ascending"
                                            >
                                                Updated Date
                                            </th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="dataTable"
                                                aria-label="Start date: activate to sort column ascending"
                                            >
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd" v-for="user of users">
                                            <td class="sorting_1">
                                                {{ user.username }}
                                            </td>
                                            <td>{{ user.email }}</td>
                                            <td>{{ user.hobbies }}</td>
                                            <td>{{ user.created_at }}</td>
                                            <td>{{ user.updated_at }}</td>
                                            <td>
                                                <a
                                                    href="#"
                                                    class="btn btn-info btn-circle btn-sm"
                                                >
                                                    <i
                                                        class="fas fa-info-circle"
                                                    ></i>
                                                </a>
                                                <a
                                                    href="#"
                                                    class="btn btn-danger btn-circle btn-sm"
                                                >
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
    data: {
        users: [],
    },
    mounted() {
        this.getUser();
        console.log(this.users,'ascsacsac');
    },
    methods: {
        async getUser() {
            try {
                const response = await axios.get("/api/user");
                const { data } = response;
                if (typeof(data) === "string") {
                    window.location.href = '/login'
                }
                this.users = data['data'];
                console.log(this.users,'this.users');
            } catch (error) {
                console.error(error);
            }
        },
    }
};
</script>

<style></style>
