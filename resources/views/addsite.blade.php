 <form action="/sites" method="post">
{!! csrf_field() !!}
{{-- With label, invalid feedback disabled and form group class --}}
<div class="row">
    <x-adminlte-input name="url" label="Website URL" placeholder="Website URL" fgroup-class="col-md-6"
        disable-feedback />
</div>
{{-- With label, invalid feedback disabled and form group class --}}
<div class="row">
    <x-adminlte-input name="da" label="DA" placeholder="DA" fgroup-class="col-md-6" disable-feedback />
</div>
{{-- With label, invalid feedback disabled and form group class --}}
<div class="row">
    <x-adminlte-input name="dr" label="DR" placeholder="DR" fgroup-class="col-md-6" disable-feedback />
</div>
{{-- With label, invalid feedback disabled and form group class --}}
<div class="row">
    <x-adminlte-input name="traffic" label="Traffic" placeholder="Traffic" fgroup-class="col-md-6" disable-feedback />
</div>
{{-- With label, invalid feedback disabled and form group class --}}
<div class="row">
    <x-adminlte-input name="niche" label="Niche" placeholder="Niche" fgroup-class="col-md-6" disable-feedback />
</div>
{{-- With label, invalid feedback disabled and form group class --}}
<div class="row">
    <x-adminlte-input name="news" label="Google news" placeholder="Google news" fgroup-class="col-md-6"
        disable-feedback />
</div>
{{-- With label, invalid feedback disabled and form group class --}}
<div class="row">
    <x-adminlte-input name="price" label="Price" placeholder="Price" fgroup-class="col-md-6" disable-feedback />
</div>

<x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save" />
</br>
</br>
</form>