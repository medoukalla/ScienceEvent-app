<div class="contact-us-form-block w-form">

    @if($success)
        <div class="w-form-done" tabindex="-1" role="region" style="display:block;border-radius: 30px;padding-left: 15px;">
            <div>Merci ! Nous avons bien reçu votre message et nous vous répondrons dans les plus brefs délais.</div>
        </div><br>
    @endif

    @if($error)
        <div class="w-form-fail" tabindex="-1" role="region" style="display:block;border-radius: 30px;padding-left: 15px;">
            <div>{{ $error }}</div>
        </div><br>
    @endif

    <form id="email-form" name="email-form" class="contact-us-form">
        <div class="contact-us-form-column">
            <input class="form-input-field w-input" maxlength="256" name="name" placeholder="Prénom" type="text" id="name-2" wire:model.defer="prenom">
        </div>
        <div class="contact-us-form-column">
            <input class="form-input-field w-input" maxlength="256" name="last_name" placeholder="Nom de famille" type="text" id="name-3" wire:model.defer="last_name">
        </div>
        <div class="contact-us-form-column">
            <input class="form-input-field w-input" maxlength="256" name="email" placeholder="Adresse e-mail" type="email" id="email-2" wire:model.defer="email" required>
        </div>
        <div class="contact-us-form-column">
            <input class="form-input-field w-input" maxlength="256" name="phone" placeholder="Téléphone" type="tel" id="field-4" wire:model.defer="phone" required>
        </div>
    </form>
    
    <div class="contact-us-form-column">
        <input class="form-input-field w-input" maxlength="256" name="subject" placeholder="Sujet" type="text" id="field-2" wire:model.defer="subject" required style="margin: 15px 0px;">
    </div>
    <div class="contact-us-form-column">
        <textarea required placeholder="Envoyez-nous votre message et nous vous contacterons dès que possible" maxlength="5000" id="field-3" name="message" class="form-input-field textarea w-input" wire:model.defer="message"></textarea>
    </div>
    <div class="contact-us-form-column" style="display:none;">
        <input type="text" wire:model="bot_field" />
    </div>

    <div wire:click="handleSubmit" class="primary-btn" style="margin-top: 15px; cursor: pointer">Envoyer</div>

</div>
    