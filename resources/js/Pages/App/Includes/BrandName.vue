<template>
    <div class="col-xs-12">
        <div class="page-title">
            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Crypto - {{ title }}</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="#"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li class="active">
                        <strong>Crypto Trading</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: String
    }
};
</script>
