<div class="row">
    <div class="col-12">
        @if(isset($config['resource']['widgets']))
            @foreach($config['resource']['widgets'] as $name => $values)
                @include('admin.widgets.'.$name, ['values' => $values,'config' => $config])
            @endforeach
        @endif


    </div>
</div>
