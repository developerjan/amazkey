<div class="row">
    @foreach($skins as $index => $skin)
        @if($index && $index % 3 === 0)
            </div> <div class="row">
        @endif
        <div class="col-md-4 skin-type">
            <div class="skin-type-button" onclick="setSkin('{{ $skin['name'] }}')">
                <div class="skin-icon">
                    <span class="fa {{ $skin['icon'] }}"></span>
                </div>
                <div class="skin-type-name">
                    <strong>{{ $skin['name'] }}</strong>
                </div>
            </div>
        </div>
    @endforeach
</div>
