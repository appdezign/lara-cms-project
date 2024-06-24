<x-formrow>
	<x-slot name="label">
		{{ html()->label(_lanq('lara-' . $entity->getModule().'::'.$entity->GetEntityKey().'.column.mycustom') .':', 'mycustom') }}
	</x-slot>
	{{ html()->text('mycustom', null)->class('form-control') }}
</x-formrow>