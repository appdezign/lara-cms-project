<x-formrow>
	<x-slot name="label">
		{{ html()->label(_lanq('lara-' . $entity->getModule().'::'.$entity->GetEntityKey().'.column.mycustom') .':', 'mycustom') }}
	</x-slot>

	{{ html()->text('mycustom', null)->class('form-control')
		->if($cvardisabled, function ($el) {
			return $el->disabled();
		}) }}

	@if($cvardisabled)
		{{ html()->hidden('mycustom', null) }}
	@endif

</x-formrow>