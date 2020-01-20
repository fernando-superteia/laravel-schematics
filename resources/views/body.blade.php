<body class="bg-gray-200">

<div class="w-full h-full fixed block top-0 left-0 bg-white opacity-75 loading">
  <span class="text-purple-500 opacity-75 top-1/2 my-0 mx-auto block relative w-0 h-0" style="
    top: 50%;
">
    <i class="fas fa-circle-notch fa-spin fa-5x"></i>
  </span>
</div>

<script>
    window.models = {!! json_encode($models) !!};
    window.relations = {!! json_encode($relations) !!};
    window.loading = function(loading = false) {
        $('.loading').toggle(loading);
    };
</script>


@include('schematics::components.navbar')
@include('schematics::components.modal')

<div class="schema" id="schema">
    @foreach($models as $model)
        @include('schematics::components.model', [
            'model' => $model,
        ])
    @endforeach
</div>

@include('schematics::scripts.positioning')
@include('schematics::scripts.selector')
@include('schematics::scripts.plumbing', [
    'relations' => $relations,
])
<style>
    html, body, .schema {
        position: relative;
        margin:0;
        padding:0;
        width:100%;
        height:100%;
        overflow: auto;
    }

    body {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .schema {
        zoom: 75%;
    }

    .model {
        z-index: 100;
    }

    .model-name {
        cursor: grab;
    }

    .flex-wrap {
        flex-wrap: wrap;
        margin-right: -120px;
    }

    .action:hover {
        cursor: pointer;
    }

    .icon {
        color: #9F7AEA
    }

    .loading {
        z-index: 1000;
    }
</style>

</body>