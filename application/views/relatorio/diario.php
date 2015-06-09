<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
    <HEAD>
        <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
        <TITLE></TITLE>
        <META NAME="GENERATOR" CONTENT="LibreOffice 4.1.3.2 (Linux)">
        <META NAME="AUTHOR" CONTENT="Arley ">
        <META NAME="CREATED" CONTENT="20150605;154850339539087">
        <META NAME="CHANGEDBY" CONTENT="Arley ">
        <META NAME="CHANGED" CONTENT="20150606;92154166156912">
        <STYLE TYPE="text/css">
            <!--
            @page { margin: 2cm }
            P { margin-bottom: 0.21cm }
            TD P { margin-bottom: 0cm }
            A:link { so-language: zxx }
            -->
        </STYLE>
    </HEAD>
    <BODY LANG="pt-BR" DIR="LTR">
        <P ALIGN=CENTER STYLE="margin-bottom: 0cm"><FONT SIZE=4 STYLE="font-size: 16pt"><B>Estacionamento
                    de Veículos </B></FONT>
        </P>
        <P ALIGN=CENTER STYLE="margin-bottom: 0cm"><BR>
        </P>
        <P ALIGN=CENTER STYLE="margin-bottom: 0cm"><FONT SIZE=4 STYLE="font-size: 16pt"><B>Relatório
                    Diário </B></FONT>
        </P>
        <P ALIGN=RIGHT STYLE="margin-bottom: 0cm"><FONT SIZE=4 STYLE="font-size: 16pt"><B>							</B></FONT></P>
        <P ALIGN=RIGHT STYLE="margin-bottom: 0cm"><BR>
        </P>
        <P ALIGN=RIGHT STYLE="margin-bottom: 0cm"><BR>
        </P>
        <TABLE WIDTH=100% CELLPADDING=4 CELLSPACING=0>
            <COL WIDTH=128*>
            <COL WIDTH=128*>
            <TR VALIGN=TOP>
                <TD WIDTH=40% STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                    <P ALIGN=LEFT><FONT SIZE=3><B>Nome Empresa:</B> Sistema
                            Estacionamento SDK </FONT>
                    </P>
                </TD>
                <TD WIDTH=40% STYLE="border: 1px solid #000000; padding: 0.1cm">
                    <P ALIGN=LEFT><FONT SIZE=3><B>Razão social: </B>3030.4004.4040-29</FONT></P>
                </TD>
            </TR>
            <TR VALIGN=TOP>
                <TD WIDTH=40% STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                    <P ALIGN=LEFT><FONT SIZE=3><B>Caixa inicializado em : </B><SPAN STYLE="font-weight: normal">
                            <?php echo $dadosCaixaDiario->data . ' '. $dadosCaixaDiario->hora?>    
                            </SPAN></FONT></P>
                </TD>
                <TD WIDTH=40% STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
                    <P ALIGN=LEFT><FONT SIZE=3><B>Finalizado em:  </B>
                         <?php echo $dadosCaixaDiario->dataFinal . ' '. $dadosCaixaDiario->horaFinal?>
                        </FONT>
                    </P>
                </TD>
            </TR>
            <TR VALIGN=TOP>
                <TD WIDTH=40% STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                    <P ALIGN=LEFT><FONT SIZE=3><B>Usuário emissor: </B><SPAN STYLE="font-weight: normal">
                                <?php echo $this->session->nome; ?>
                            </SPAN></FONT></P>
                </TD>
                <TD WIDTH=40% STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
                    <P ALIGN=LEFT><FONT SIZE=3><B>Data e hora de Emissão: </B><SPAN STYLE="font-weight: normal">2015-03-29</SPAN></FONT></P>
                </TD>
            </TR>
        </TABLE>
        <P ALIGN=LEFT STYLE="margin-bottom: 0cm"><BR>
        </P>
        <TABLE WIDTH=100% CELLPADDING=4 CELLSPACING=0>
            <TR VALIGN=TOP>
                <TD WIDTH=156 BGCOLOR="#dddddd" STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                    <P ALIGN=CENTER><FONT SIZE=3><B><SPAN STYLE="background: transparent">Veiculo</SPAN></B></FONT></P>
                </TD>
                <TD WIDTH=148 BGCOLOR="#dddddd" STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                    <P ALIGN=CENTER><FONT SIZE=3><B><SPAN STYLE="background: transparent">Cliente</SPAN></B></FONT></P>
                </TD>
                <TD WIDTH=135 BGCOLOR="#dddddd" STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                    <P ALIGN=CENTER><FONT SIZE=3><B><SPAN STYLE="background: transparent">Hora
                                    Entrada</SPAN></B></FONT></P>
                </TD>
                <TD WIDTH=175 BGCOLOR="#dddddd" STYLE="border: 1px solid #000000; padding: 0.1cm">
                    <P ALIGN=CENTER><FONT SIZE=3><B><SPAN STYLE="background: transparent">Valor
                                    R$</SPAN></B></FONT></P>
                </TD>
            </TR>
            <?php
                $i = 1;
             foreach ($dadosEntradaSaida->result() as $linha):
              ?>
                <TR VALIGN=TOP>
                    <TD WIDTH=156 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                        <P ALIGN=CENTER><FONT SIZE=3><?php echo $linha->veiculo ?></FONT></P>
                    </TD>
                    <TD WIDTH=148 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                        <P ALIGN=CENTER><FONT SIZE=3><?php echo $linha->cliente ?></FONT></P>
                    </TD>
                    <TD WIDTH=135 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                        <P ALIGN=CENTER><FONT SIZE=3><?php echo $linha->data . ' ' .$linha->hora; ?></FONT></P>
                    </TD>
                    <TD WIDTH=175 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
                        <P ALIGN=CENTER><FONT SIZE=3><?php echo $linha->valor ?></FONT></P>
                    </TD>
                </TR>
            <?php
              endforeach;
            ?>
        </TABLE>
        <P ALIGN=LEFT STYLE="margin-bottom: 0cm"><BR>
        </P>

        <TABLE WIDTH=334 CELLPADDING=4 CELLSPACING=0 align="right">
            <COL WIDTH=169>
            <COL WIDTH=147>
            <TR VALIGN=TOP>
                <TD WIDTH=169 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.1cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                    <P ALIGN=RIGHT><FONT SIZE=3><B>Quantidade de Veículos</B></FONT></P>
                </TD>
                <TD WIDTH=147 STYLE="border: 1px solid #000000; padding: 0.1cm">
                    <P ALIGN=RIGHT>
                        <?php                  
                            echo $dadosEntradaSaida->num_rows();
                         ?>
                    </P>
                </TD>
            </TR>
            <TR VALIGN=TOP>
                <TD WIDTH=169 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                    <P ALIGN=RIGHT><FONT SIZE=3><B>Valor Iniciado R$:</B></FONT></P>
                </TD>
                <TD WIDTH=147 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
                    <P ALIGN=RIGHT>
                        <?php                  
                            echo number_format($dadosCaixaDiario->saldoInicial, 2, '.', ''); 
                         ?>
                    </P>
                </TD>
            </TR>
            <TR VALIGN=TOP>
                <TD WIDTH=169 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                    <P ALIGN=RIGHT><FONT SIZE=3><B>Valor Finalizado R$:</B></FONT></P>
                </TD>
                <TD WIDTH=147 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
                    <P ALIGN=RIGHT>
                        <?php                  
                            echo number_format($dadosCaixaDiario->saldoFinal, 2, '.', ''); 
                         ?>
                    </P>
                </TD>
            </TR>
            <TR VALIGN=TOP>
                <TD WIDTH=169 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0cm">
                    <P ALIGN=RIGHT><FONT SIZE=3><B>Valor Liquido R$:</B></FONT></P>
                </TD>
                <TD WIDTH=147 STYLE="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0cm; padding-bottom: 0.1cm; padding-left: 0.1cm; padding-right: 0.1cm">
                    <P ALIGN=RIGHT>
                        <?php                  
                            echo number_format($dadosCaixaDiario->saldoFinal - $dadosCaixaDiario->saldoInicial, 2, '.', ''); 
                         ?>
                    </P>
                </TD>
            </TR>
        </TABLE>
        <P ALIGN=LEFT STYLE="margin-bottom: 0cm"><BR>
        </P>
        <DIV TYPE=FOOTER>
            <P ALIGN=CENTER STYLE="margin-top: 0.5cm; margin-bottom: 0cm">	<I><SPAN STYLE="font-weight: normal">Sistema
                        de Estacionamento  By equipe TADS – JANUÁRIA</SPAN></I>	</P>
        </DIV>
    </BODY>
</HTML>