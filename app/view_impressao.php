<main role="main">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4">
                    <form>
                        <input class="btn btn-info btn-sm" type="button" value="Imprimir" onClick="window.print()" />
                    </form>
                </div>
            </div>
            <div class="mt-2">
                <div class="row">
                    <div class="col-12 mb-2">
                        <div align="center" id="ficha" style="width:500;height:230; background-color: #FFFFFF; margin-left: auto; margin-right: auto; padding: 5px; border: 1px solid #003366;">
                            <br>
                            <!-- <img id="logo" src="http://site.xexeu.pe.gov.br/wp-content/themes/xexeu/assets/img/logo-horizontal.png" alt=""> -->
                            <br>
                            <strong>COMPROVANTE DE INSCRIÇÃO</strong>
                            <div align="right">
                                <table border="0" width="217">
                                    <tbody>
                                        <tr>
                                            <td width="190">
                                                <div align="right">
                                                    <strong>Nº da Inscrição:</strong>
                                                </div>
                                            </td>
                                            <td width="17">
                                                <?php echo str_pad($linha->idCandidato , 9 , '0' , STR_PAD_LEFT);; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div align="right">
                                                    <strong>Data:</strong>
                                                </div>
                                            </td>
                                            <td>
                                            <?php 
                                            $datainsercao=$linha->datainsercao;
                                            echo date('d/m/Y', strtotime($datainsercao));
                                            
                                            ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p></p>
                            <p align="center">
                                <strong>
                                    CONCURSO / SELEÇÃO :
                                    Seleção Simplificada 2022
                                </strong>
                                <br>
                                 <?php echo $linha->sec_nome; ?>
                                <br>
                                <strong>
                                    CARGO:
                                </strong> <?php echo $linha->cargo_nome; ?>
                            </p>
                            <table border="1" cellpadding="5" cellspacing="5" width="100%">
                                <tbody>
                                    <tr>
                                        <td height="14" width="29%">
                                            <div align="left">
                                                <strong>NOME:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $linha->nomecompleto; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="14" width="29%">
                                            <div align="left">
                                                <strong>CPF:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $linha->cpf; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="14" width="29%">
                                            <div align="left">
                                                <strong>RG:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $linha->rg; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="14" width="29%">
                                            <div align="left">
                                                <strong>Número do NIS:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $linha->nis; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="14" width="29%">
                                            <div align="left">
                                                <strong>ESTADO CIVIL:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $linha->estadocivil; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="14" width="29%">
                                            <div align="left">
                                                <strong>ESCOLARIDADE:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $linha->escolaridade; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div align="left">
                                                <strong>DOC DE IDENTIFICAÇÃO:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $linha->rg . '-' . $linha->orgaoemissor; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div align="left">
                                                <strong>SEXO:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <?php
                                            $sexo = $linha->sexo;
                                            if ($sexo === 'M') {
                                                echo "MASCULINO";
                                            } elseif ($sexo === 'F') {
                                                echo "FEMININO";
                                            }





                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="14" width="29%">
                                            <div align="left">
                                                <strong>DATA DE NASCIMENTO:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <?php
                                            $data = $linha->datanascimento;
                                            echo date('d/m/Y', strtotime($data));
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="13" width="29%">
                                            <div align="left">
                                                <strong>ENDEREÇO:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $linha->endereco . '-' .$linha->numero.'-'. $linha->bairro . '-' . $linha->complemento; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div align="left">
                                                <strong>CIDADE/ESTADO:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $linha->cidade . '-' . $linha->uf ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div align="left">
                                                <strong>CONTATOS:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <b>
                                                <i>Celular.:<?php echo $linha->celular; ?></i>

                                            </b>
                                            <b>
                                                <i>Telefone.:<?php echo $linha->telefone; ?></i>

                                            </b>
                                            <b>
                                                <i>E-MAIL.:</i>
                                                <?php echo $linha->email; ?>
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div align="left">
                                                <strong>PORTADOR DE DEFICIÊNCIA:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <?php
                                            $deficiencia = $linha->portador;
                                            if ($deficiencia === '1') {
                                                echo "NÃO";
                                            } elseif ($deficiencia === '2') {
                                                echo "SIM";
                                            }





                                            ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div align="left">
                                                <strong>VALOR DA INSCRIÇÃO:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            R$<?php echo $linha->modalidade; ?>,00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div align="left">
                                                <strong>INSCRIÇÃO:</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <?PHP
                                            $pago = $linha->vlrpago;
                                            if ($pago ===0) {
                                                echo "INSCRIÇÃO NÃO CONFIRMADA";
                                            } else {
                                                echo "INSCRIÇÃO CONFIRMADA";
                                            }
                                            
                                            ?>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table border="0" height="73" width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div align="center">
                                                <span style="width:180px">_________________________________</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div align="center">
                                                <span style="width:180px">_________________________________</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div align="center">
                                                <span style="width:180px">Assinatura do Servidor</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div align="center">
                                                <span style="width:180px">Assinatura do Candidato</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>





            </div>
            <div class="card mt-1 ">
                <div class="card-body bg-danger ">

                    <div class="row ">
                        <div class="col-12 ">
                         <ul>   
                        <li class="text-light">Ao finalizar sua inscrição <span id="spam_inscricao">NÃO ESQUEÇA DE IMPRIMIR O COMPROVANTE.</span> É com ele que você irá solicitar a emissão do DAM de pagamento no setor de tributação da Prefeitrua.</li>
                            
                            <li class="text-light">A emissão do boleto de pagamento deverá ser feita no setor de tributação da Prefeitura
                                Municipal de Xexeu, localizada à <strong>Av. Mário Melo, s/nº, Centro, Xexeu-PE, no
                                    horário das 07:00h as 13:00h de segunda a sexta até o dia 31 de março de
                                    2022.</strong></li>
                            <li class="text-light">O pagamento da taxa de inscrição poderá ser efetuado até o dia <strong>31 de março de
                                    2022.</strong></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>