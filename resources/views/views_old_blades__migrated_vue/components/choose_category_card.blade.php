<div class="row">
    <div class="col-12">
        <div class="h4 text-body">По категориям</div>
        <div class="card border" style="flex-direction: row">

            @foreach($categories as $category_column)
                <div class="card-body" style="width: 200px; flex-direction: column">

                    @foreach($category_column as $category)
                        <div class="row">
                            <div class="col-9">
                                <a href=/categ/{{ $category['_id'] }} target="_blank" class="text-dark-emphasis"
                                   style="text-decoration: none">
                                    {{ $category['friendly_name'] }}          </a></div>

                            <div class="col-3 text-body-tertiary">
                                        <span class="float-end">
                                            {{ $category['count'] }}          </span></div></div>
                    @endforeach                     </div>

            @endforeach

        </div>
    </div>
</div>
