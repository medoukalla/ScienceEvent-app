<div>
    <div class="hello-user">
        Les factures
    </div>
    <span class="sub-title">Demandez ou téléchargez vos factures :</span>
    <div class="tva-message">
        <p><b>Pour demander une facture avec TVA, il suffit de payer le montant TVA affiché (20% du prix de la formation).</b></p>
    </div>

    <style>
    .tva-message {
        background-color: #f5f5f5;
        padding: 10px;
        border-radius: 4px;
        margin-bottom: 10px;
        font-size:14px;
    }
    </style>
    <hr style="margin: 10px 0">
    <div class="courses-wrapper" @if ( $hide_form == true ) style="display: none" @endif >
        <table class="courses-table">
            <thead>
                <tr>
                    <th>Formation</th>
                    <th>Prix (DH)</th>
                    <th>TVA (20%)</th>
                    <th>Total (DH)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ( $orders as $order)
                    <tr>
                        <td>
                            <div class="cours">
                                <img src="{{ asset('assets/svg/cours-table.svg') }}" alt="">
                                {{ $order->formation->title }} {{ $order->id }}
                            </div>
                        </td>
                        <td>{{ $order->price }} </td>
                        <td>{{ $order->price * 0.2 }} </td>
                        <td>{{ $order->price * 1.2 }} </td>

                        @if ( $order->access_invoice == 0 )
                            <td>
                                <a wire:click='toggleShowForm( "{{ $order->id }}", "{{ $order->formation->title }}", "{{ $order->price }}" )' href="javascript:;">
                                    <div class="discover">
                                        <span style="color:#1694c5;" >Demande de facture</span>
                                        <img src="{{ asset('assets/svg/arrow-right.svg') }}" alt="">
                                    </div>
                                </a>
                            </td>
                        @elseif ( $order->access_invoice == 2 )
                            <td>
                                <a  href="javascript:;">
                                    <div class="discover">
                                        <span style="color:#2cb167;" >En attente de confirmation</span>
                                    </div>
                                </a>
                            </td>
                        @elseif ( $order->access_invoice == 3 )
                            <td>
                                <a  href="javascript:;">
                                    <div class="discover">
                                        <span style="color:darkgoldenrod;">Télécharger la facture</span>
                                    </div>
                                </a>
                            </td>
                        @endif
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="courses-wrapper"  style=" height: auto; overflow: hidden; @if ( $hide_form == false ) display: none @endif " >
        <div wire:click="hide_table" class="btn-back" >
            <img src="{{ asset('assets/svg/arrow-back.svg') }}" alt="">
            <span>Retour</span>
        </div>
        <table class="courses-table">
            <thead>
                <tr>
                    <th>Formation</th>
                    <th>Prix</th>
                    <th style=" background-color: #adffadc2; "><b>Montant à payer pour obtenir la facture ( 20% TVA )</b></th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="cours">
                            <img src="{{ asset('assets/svg/cours-table.svg') }}" alt="">
                            {{ $order->formation->title }} (DH)
                        </div>
                    </td>
                    <td>{{ $order->price }} DH </td>

                    <td style=" background-color: #adffadc2; "><b>{{ $order->price * 0.2 }} DH</b></td>
                    <td>{{ $order->price * 1.2 }} DH</td>
                </tr>
            </tbody>
        </table>
        <div class="class-details-instructor-inner" >
            <div class="r-side-floating" >


                <div class="method-payment" >
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
                        Payer en ligne : <span>( {{ $price }}.00 DH )</span>
                    </div>
                @else
                    <div wire:click="paymentOffline" class="btn-org" style="margin-top: 20px">
                        Confirmer le paiement et demander la facture
                    </div>
                @endif

                
            </div>
        </div>
    </div>

<style>
    .courses-wrapper {
        height: auto !important;
        overflow: hidden !important;
    }
</style>
</div>