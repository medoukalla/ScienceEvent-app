<div class="class-details-instructor-wrap">


    <!-- visitor  -->
    <div class="class-details-instructor-inner" @if ($display != 'details') style="display: none" @endif >
        <div class="r-side-floating">
            <div class="r-s-title">
                {{ $formation->title }}
            </div>
            <div class="format">
                {{ $formation->category->name }}
            </div>
            <div class="class-categories">
                <div class="class @if ( $formation->type == 1 ) selected @endif ">
                    <div class="class-icon">
                        <img src="{{ asset('assets/svg/e-learining-icon.svg') }}" alt="E-learning">
                    </div>
                    E-learning
                </div>
                <div class="class @if ( $formation->type == 2 ) selected @endif ">
                    <div class="class-icon">
                        <img src="{{ asset('assets/svg/presentiel-icon.svg') }}" alt="E-learning">
                    </div>
                    Présentiel
                </div>
                <div class="class @if ( $formation->type == 3 ) selected @endif ">
                    <div class="class-icon">
                        <img src="{{ asset('assets/svg/class-virtual-icon.svg') }}" alt="E-learning">
                    </div>
                    Classe Virtuelle
                </div>
            </div>
            <div class="information-details">
                <div class="detail">
                    <div class="detail-text">
                        <div class="detail-icon">
                            <img src="{{ asset('assets/svg/detail-hand.svg') }}" alt="">
                        </div>
                        <span>Prise en charge</span>
                    </div>
                    <div class="detail-tags">
                        <div class="tage">
                            DPC
                        </div>
                        <div class="tage">
                            Crédit d’impôt
                        </div>
                    </div>
                </div>
                <div class="detail">
                    <div class="detail-text">
                        <div class="detail-icon">
                            <img src="{{ asset('assets/svg/detail-list.svg') }}" alt="">
                        </div>
                        <span>100% pris en charge sans avance de frais</span>
                    </div>
                    <div class="tips">
                        <a href="#">
                            <img src="{{ asset('assets/svg/tips.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="detail">
                    <div class="detail-text">
                        <div class="detail-icon">
                            <img src="{{ asset('assets/svg/detail-money.svg') }}" alt="">
                        </div>
                        <span>360€ d’indemnisation en exercice libéral</span>
                    </div>
                </div>
                <div class="detail">
                    <div class="detail-text">
                        <div class="detail-icon">
                            <img src="{{ asset('assets/svg/detail-ressources.svg') }}" alt="">
                        </div>
                        <span>Ressources, mémento et fiches pratiques</span>
                    </div>
                </div>
                <div class="detail">
                    <div class="detail-text">
                        <div class="detail-icon">
                            <img src="{{ asset('assets/svg/detail-duration.svg') }}" alt="">
                        </div>
                        <span>8h de vidéo à visionner où vous voulez</span>
                    </div>
                </div>
            </div>
            
            <div class="floating-btn">
                <div wire:click="register" class="btn-org" style="margin-top: 20px;">
                    Acheter cette formation
                </div>
            </div>

            <hr>
            <div class="info-ref-wrap">
                <div class="info-ref">
                    Réf. action DPC : <span> 96952425089</span>
                </div>
                <div class="info-ref">
                    N° organisme DPC : <span> 9695</span>
                </div>
            </div>
            <div class="info-help">
                <p>
                    Nos conseillers vous accompagnent pour vos formalités administratives !
                </p>
            </div>
            <div class="info-supp">
                Contactez nous au <div class="phone">
                    {{ setting('site.phone') }}
                </div>
            </div>
        </div>
    </div>

    <!-- Register form  -->
    <div class="class-details-instructor-inner" @if ($display != 'register') style="display: none" @endif >
        <div class="r-side-floating">
            <div class="btn-back" wire:click="back">
                <img src="{{ asset('assets/svg/arrow-back.svg') }}" alt="">
                <span>Retour</span>
            </div>
            <div class="contact-us-form insc-floeating">
                <div id="w-node-_65e7f6f3-9693-8c9e-4ccb-602a19bdcae8-3aa7fe38" class="contact-us-form-column">
                    <label for="">Nom et prénom :</label>
                    <input wire:model.lazy="name" class="form-input-field w-input" maxlength="256" name="field-4" data-name="Field 4" placeholder="Votre nom et prénom" type="tel" id="field-4" required="">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div id="w-node-_65e7f6f3-9693-8c9e-4ccb-602a19bdcae8-3aa7fe38" class="contact-us-form-column">
                    <label for="">Spécialité :</label>
                    <input wire:model.lazy="specialite" class="form-input-field w-input" maxlength="256" name="field-4" data-name="Field 4" placeholder="Votre spécialité" type="tel" id="field-4" required="">
                    @error('specialite') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div id="w-node-_65e7f6f3-9693-8c9e-4ccb-602a19bdcae8-3aa7fe38" class="contact-us-form-column">
                    <label for="">Téléphone :*</label>
                    <input wire:model.lazy="phone" class="form-input-field w-input" maxlength="256" name="field-4" data-name="Field 4" placeholder="Votr téléphone" type="tel" id="field-4" required="">
                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div id="w-node-_65e7f6f3-9693-8c9e-4ccb-602a19bdcae8-3aa7fe38" class="contact-us-form-column">
                    <label for="">Email :*</label>
                    <input wire:model.lazy="email" class="form-input-field w-input" maxlength="256" name="field-4" data-name="Field 4" placeholder="Votre email" type="tel" id="field-4" required="">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="btn-org" wire:click="save_user">
                    S'inscrire
                </div>
            </div>
        </div>
    </div>

    <!-- payment  -->
    <div class="class-details-instructor-inner" @if ($display != 'payment') style="display: none" @endif >
        <div class="r-side-floating" style=" max-height: 660px; overflow-x: scroll; ">
            <div wire:click="register" class="btn-back" >
                <img src="{{ asset('assets/svg/arrow-back.svg') }}" alt="">
                <span>Retour</span>
            </div>
            <div class="r-s-title">
                {{ $formation->title }}
            </div>
            <div class="format">
                {{ $formation->category->name }}
            </div>
            <div class="class-categories">
                <div class="class @if ( $formation->type == 1 ) selected @endif ">
                    <div class="class-icon">
                        <img src="{{ asset('assets/svg/e-learining-icon.svg') }}" alt="E-learning">
                    </div>
                    E-learning
                </div>
                <div class="class @if ( $formation->type == 2 ) selected @endif ">
                    <div class="class-icon">
                        <img src="{{ asset('assets/svg/presentiel-icon.svg') }}" alt="E-learning">
                    </div>
                    Présentiel
                </div>
                <div class="class @if ( $formation->type == 3 ) selected @endif ">
                    <div class="class-icon">
                        <img src="{{ asset('assets/svg/class-virtual-icon.svg') }}" alt="E-learning">
                    </div>
                    Classe Virtuelle
                </div>
            </div>

            <div class="formation-packs">
                @foreach ( $formation->packs->sortBy('price') as $key => $pack )
                    <div wire:click="select_pack({{ $pack->id }}, {{ $pack->price }})" class="pack @if ( $selected_pack == $pack->id ) selected @endif">
                        <div class="pack-type">
                            <input type="radio" name="" id="">
                            <span>{{ $pack->title }}</span>
                        </div>
                        <div class="pack-price">{{ $pack->price }}.00DH</div>
                    </div>
                @endforeach
            </div>

            <div class="pack-alert success" style="@if ( $amount > 0 ) display:none; @else display:block; @endif">
                Veuillez selectionner un pack d'abord!
            </div>


            <div class="method-payment" style="display: {{ $amount ? 'block' : 'none' }};">
                <div class="m-title">
                    Moyen de payement
                </div>
                <select wire:model="payment_method" name="payment_method" id="payment_method" >
                    <option value="virement" selected>Virement / Versement</option>
                    <option value="cheque">Chéque</option>
                    <option value="espece">Espèce</option>
                    <option value="prise_en_charge">Prise en charge</option>
                    <option value="credit_card">Credit card</option>
                </select>
                {{-- Virement / versement --}}
                <div @if ( $payment_method != 'virement' ) style="display: none" @endif class="m-content-wrapper select-one">
                    <div class="block">Au profit de : <span>{{ setting('virement.compte-name') }}</span></div>
                    <div class="block">Domiciliée chez : <span>{{ setting('virement.bank-name') }}</span></div>
                    <div class="block">RIB : <span>{{ setting('virement.rib') }}</span></div>
                    <div class="block">IBAN : <span>{{ setting('virement.iban') }}</span></div>
                    <hr>
                    <p>Merci d'envoyer une copie de Virement ou Versement par</p>
                    <hr>
                    <div class="block">Email : <span>{{ setting('site.email') }}</span></div>
                    <div class="block">Whatsapp : <span>{{ setting('site.phone') }}</span></div>
                    <hr>
                    <p>Merci de demander a votre banquier de <span>préciser le nom de médecin participant</span> dans le motif.</p>
                    <p>Le nom de bénéficiaire de la formation doit être <span>noté clairement</span> dans le reçu de réglement que vous envoyez</p>
                    <p>Les inscriptions ne sont ni annulables ni remboursables</p>

                </div>
                {{-- Chéque --}}
                <div @if ( $payment_method != 'cheque' ) style="display: none" @endif class="m-content-wrapper select-one">
                    <div class="block">Au profit de : <span>{{ setting('virement.cheque-for') }}</span></div>
                    <hr>
                    <p>Les inscriptions ne sont ni annulables ni remboursables</p>
                </div>
                {{-- Espéce --}}
                <div @if ( $payment_method != 'espece' ) style="display: none" @endif class="m-content-wrapper select-one">
                    <div class="block">Adresse : <span>{{ setting('virement.espece-address') }}</span></div>
                    <hr>
                    <p>Les inscriptions ne sont ni annulables ni remboursables</p>
                </div>
                {{-- Prise on charge --}}
                <div @if ( $payment_method != 'prise_en_charge' ) style="display: none" @endif class="m-content-wrapper select-one">
                    <label for="">Nom de laboratoire*</label>
                    <input wire:model="laboratory_name" type="text" name="laboratory_name">
                    @error('laboratory_name') <span class="text-danger">{{ $message }}</span> @enderror
                    <div class="block">Pour les laboratoires en compte, envoyez un bon de commande à : <span>{{ setting('site.email') }}</span></div>
                    <hr>
                    <p>Si non, la totalité du règlement doit être payé avant le jour de la formation.</p>
                    <hr>
                    <p>Les inscriptions ne sont ni annulables ni remboursables</p>
                </div>
                <div @if ( $payment_method != 'credit_card' ) style="display: none" @endif class="m-content-wrapper select-one">
                    <p>Pour les payements en ligne, cliquez sur le bouton ci-dessous pour être redirigé vers la page de payement.</p>
                    
                </div>
            </div>
            
 
            @if ( $payment_method == 'credit_card' ) 
                <div  class="btn-org online-pay-btn" style="margin-top: 20px">
                    Payer en ligne : <span>( {{ $amount }}.00 DH )</span>
                </div>
            @else
                <div wire:click="paymentOffline" class="btn-org" style="margin-top: 20px">
                    Confirmer le payment
                </div>
            @endif

            
        </div>
    </div>

    <!-- Upload proof  -->
    <div class="class-details-instructor-inner" @if ($display != 'send_proof') style="display: none" @endif >
        <div class="r-side-floating">
            <div class="r-s-title">
                {{ $formation->title }}
            </div>
            <div class="format">
                {{ $formation->category->name }}
            </div>
            <div class="class-categories" style="display: block !important;">
            
                <p style="font-size: 17px;margin-bottom: 10px;background-color: #ff9f9f63;padding: 10px 12px;line-height: 24px;border-radius: 10px;">Veuillez uploader votre preuve de paiement pour acclerer la verification de votre paiement.</p>
            

                <div class="form-group">
                    <label for="proof">Preuve du paiement*</label>
                    <input wire:model="proof" type="file" class="form-control " style="width: 100%; height:40px;" id="proof" name="proof" required>
                    @error('proof') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                
                

                <div class="floating-btn">
                    <div wire:click="add_proof" class="btn-org" style="margin-top: 20px;">
                        Confirmer paiement
                    </div>
                </div>

                <div class="floating-btn">
                    <div wire:click="exportPdf"  class="btn-org" style="margin-top: 20px;">
                        Telecharger bon de livraison
                    </div>
                </div>
            
            </div>
            
            
            <div class="floating-btn">
                <div wire:click="payment" class="btn-org" style="margin-top: 20px;">
                    Retour
                </div>
            </div>

            
        </div>
    </div>

    <!-- Success  -->
    <div class="class-details-instructor-inner" @if ($display != 'success') style="display: none" @endif >
        <div class="r-side-floating">
            <div class="r-s-title">
                {{ $formation->title }}
            </div>
            <div class="format">
                Format
            </div>
            <div class="class-categories" style="display: block !important;">
            
                <p style="font-size: 17px;margin-bottom: 10px;background-color: #dff0d8;padding: 10px 12px;line-height: 24px;border-radius: 10px;">
                    Votre commande a ete bien enregistree. Nous allons confirmer votre paiement des que possible.
                    <br>
                    Veuillez consulter votre boite email pour plus de details.
                </p>
            </div>

            <div class="floating-btn">
                <div wire:click="exportPdf"  class="btn-org" style="margin-top: 20px;">
                    Telecharger bon de livraison
                </div>
            </div>
            
        </div>
    </div>
    

</div>