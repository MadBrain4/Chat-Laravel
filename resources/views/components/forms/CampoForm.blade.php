<div>
    @component('components.forms.LabelForm')
        @slot('for', $for )
        @slot('campo', $campo )
    @endcomponent    
    @component('components.forms.InputForm')
        @slot('type', $type)
        @slot('nameId', $nameId)
        @slot('placeholder', $placeholder)
    @endcomponent
</div>