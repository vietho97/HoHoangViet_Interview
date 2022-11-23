<template>
    <div id="wrapper">
        <!-- Sidebar -->
        <!-- <SidebarComponent /> -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <TopbarComponent />
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <ContentComponent />
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <FooterComponent /> -->
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
</template>

<script>
import ContentComponent from "./layout/ContentComponent.vue";
import FooterComponent from "./layout/FooterComponent.vue";
import SidebarComponent from "./layout/SidebarComponent.vue";
import TopbarComponent from "./layout/TopbarComponent.vue";

export default {
    components: {
        ContentComponent,
        FooterComponent,
        SidebarComponent,
        TopbarComponent,
    },
    mounted() {
        
    },
};
</script>
