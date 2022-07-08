<div>
    <form wire:submit.prevent="$emit('getGoogleRecaptchaToken')">
        <div class="grid grid-cols-12 gap-y-[5px] gap-x-[5px]">
            <div class="col-span-12">
                <div class="font-primary font-medium text-[18px] text-primary-grey mb-[10px]">
                    {{ $repo->form_title }}
                </div>
            </div>
            <div class="col-span-12 lg:col-span-3">
                <label class="font-primary font-light tracking-wider text-[16px] text-primary-grey">
                    {{ $repo->label_name }}
                </label>
            </div>
            <div class="col-span-12 lg:col-span-9">
                <input wire:model.defer="name"
                    class="bg-tertiary-grey-100 w-full border-0 transition-all focus:ring-primary-grey focus:ring-2 focus:ring-offset-2"
                    type="text">
                <div class="h-[20px]">
                    @error('name')
                    <small class="font-primary font-bold text-red-500">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-span-12 lg:col-span-3">
                <label class="font-primary font-light tracking-wider text-[16px] text-primary-grey">
                    {{ $repo->label_phone }}
                </label>
            </div>
            <div class="col-span-12 lg:col-span-9">
                <input wire:model.defer="phone"
                    class="bg-tertiary-grey-100 w-full border-0 transition-all focus:ring-primary-grey focus:ring-2 focus:ring-offset-2"
                    type="text">
                <div class="h-[20px]">
                    @error('phone')
                    <small class="font-primary font-bold text-red-500">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-span-12 lg:col-span-3">
                <label class="font-primary font-light tracking-wider text-[16px] text-primary-grey">
                    {{ $repo->label_email }}
                </label>
            </div>
            <div class="col-span-12 lg:col-span-9">
                <input wire:model.defer="email"
                    class="bg-tertiary-grey-100 w-full border-0 transition-all focus:ring-primary-grey focus:ring-2 focus:ring-offset-2"
                    type="text">
                <div class="h-[20px]">
                    @error('email')
                    <small class="font-primary font-bold text-red-500">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-span-12 lg:col-span-3">
                <label class="font-primary font-light tracking-wider text-[16px] text-primary-grey">
                    {{ $repo->label_message }}
                </label>
            </div>
            <div class="col-span-12 lg:col-span-9">
                <textarea wire:model.defer="message"
                    class="bg-tertiary-grey-100 w-full border-0 transition-all focus:ring-primary-grey focus:ring-2 focus:ring-offset-2"
                    rows=3>
                </textarea>
                <div class="h-[20px]">
                    @error('message')
                    <small class="font-primary font-bold text-red-500">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-span-12">
                <div class="h-[20px] text-right">
                    @error('google_recaptcha_token')
                    <small class="font-primary font-bold text-red-500">{{ $message }}</small>
                    @enderror
                    @if (session()->has('message_failure'))
                    <small class="font-primary font-bold text-red-500">{{ session('message_failure') }}</small>
                    @endif
                    @if (session()->has('message_success'))
                    <small class="font-primary font-bold text-green-500">{{ session('message_success') }}</small>
                    @endif
                </div>
            </div>
            <div class="col-span-12 flex justify-end">
                <button wire:loading.attr="disabled" type="submit"
                    class="inline-block font-primary font-light uppercase tracking-wider text-[16px] text-primary-grey pl-[15px] border-b-[1px] border-primary-grey">
                    {{ $repo->label_submit }}
                </button>
            </div>
        </div>
        <input wire:model.defer="google_recaptcha_token" type="hidden">
    </form>
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}"></script>
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('getGoogleRecaptchaToken', () => {
                grecaptcha.ready(function() {
                    grecaptcha.execute('{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}', {action: 'submit'})
                    .then(function(token) {
                        @this.emitSelf('setGoogleRecaptchaToken', token);
                    });
                });
            });
        });
    </script>
</div>