<!DOCTYPE html>
<html lang="uk-UA">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>
    </title>
    <style>
        body {
            widows: 0;
            orphans: 0;
            font-family: 'Times New Roman', DejaVu Sans, serif;
            font-size: 10px
        }

        p {
            margin: 0pt
        }

        table {
            margin-top: 0pt;
            margin-bottom: 0pt
        }

        .Standard {
            widows: 0;
            orphans: 0;
            font-size: 10px
        }

        .Textbody {
            margin-bottom: 6pt;
            widows: 0;
            orphans: 0;
            font-size: 10px
        }
    </style>
</head>
@php
$i1 = 51;
$i3 = 13;
$i4 = 84;
$i5 = 86;
$i6 = 56;
$i7 = $copyes;
$i8 = 13;
$i9 = 13;
$i10 = 13;
$total = $i1 + $i2 + $i3 + $i4 + $i5 + $i6 + $i7 + $i8 + $i9 + $i10;
@endphp
<body>
    <div>
        <p class="Standard" style="text-align:center; line-height:115%;"><strong>&nbsp;</strong></p>
        <p class="Standard" style="text-align:center; line-height:115%;"><strong>Комунальне підприємство &ldquo;Бюро технічної інвентаризації&rdquo; Одеської міської ради</strong></p>
        <p class="Standard" style="text-align:center; line-height:115%;">Замовлення-зобов&apos;язання № {{$code}} від {{$created_at}} на суму {{$sum}} грн.</p>
        <p class="Standard" style="text-indent:28.35pt; text-align:justify; line-height:115%;">{{$personal_data}}, надалі іменується &ldquo;Замовник&rdquo;, та Комунальне підприємство &ldquo;Бюро технічної інвентаризації&rdquo; Одеської міської ради, надалі іменується &ldquo;Виконавець&rdquo; (а разом - Сторони) уклали цей договір про наступне.</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">1. Виконавець бере на себе зобов&apos;язання виконати вид роботи <strong>&ldquo;Надання копій з інвентаризаційної або реєстраційної справи стосовно юридичних осіб&rdquo;</strong> за адресою: {{$city}} {{$address}} {{$house_number}} {{$house_building}} {{$apartment}} {{$office}} у термін визначений замовником/ у термін виконання п’ять робочих днів для суб’єктів господарювання у сфері технічної інвентаризації.</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">2. Замовник зобов&apos;язується сплатити Виконавцю за виконання роботи, що надається згідно з пунктом 1 цього замовлення у розмірі {{$sum}} грн.</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">3. Виконавець має право отримувати від замовника необхідну документацію для надання послуг за цим договором, а саме: правовстановлювальні документи та їх засвідчені копії, а також інші документи визначені законодавством України.</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">4. Відповідність за достовірність та повноту інформації, наданої відповідно до цього договору, несе Замовник.</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">5. Замовник своїм підписом засвідчує, що подані їм документи для укладення договору про надання послуг та подальшого зберігання згідні з оригіналом, у чому він розписується.</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">6. Термін надання послуг при застосуванні коефіцієнту 1 складає один місяць.</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">7. Замовник надає згоду на скорочення терміну надання послуг за домовленістю Сторін та застосування коефіцієнту 2 до розрахункової вартості затрачених норм часу для фізичних осіб за 3 дні, для юридичних осіб за 10 діб.</p>
        <p class="Standard" style="text-align:justify; line-height:115%;"><span style="width:35.4pt; display:inline-block;">&nbsp;</span></p>
        <p class="Standard" style="text-align:justify; line-height:115%;"><span style="width:35.4pt; display:inline-block;">&nbsp;</span>Замовник_________________________________<span style="width:0.53pt; display:inline-block;">&nbsp;</span></p>
        <p class="Standard" style="text-align:justify; line-height:115%;"><span style="width:35.4pt; display:inline-block;">&nbsp;</span>(підпис Замовника)</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">8. За письмовою заявою Замовника повернення оплачених коштів здійснюється:</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">повністю, якщо виконання договору обумовлено виною Виконавця;</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">за вирахуванням компенсації витрат, визначених калькуляцією норм часу. У випадку відмови Замовника від послуги після виготовлення замовленого, оплата Виконавцем не повертається.</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">9. До договору додається акт виконаних робіт.</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">&nbsp;</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">Замовник____________________<span style="width:7.73pt; display:inline-block;">&nbsp;</span> <span style="width:32.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span>Приймальник________________________</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">(підпис Замовника)<span style="width:6.58pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span> <span style="width:32.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span>(підпис Приймальника)</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">&nbsp;</p>
        <p class="Standard" style="text-align:justify; line-height:115%;">&nbsp;</p>
        <p class="Textbody" style="margin-bottom:7.5pt; text-align:justify; widows:2; orphans:2;"><span style="color:#333333;">&nbsp;</span><span style="color:#333333;">_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ __ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _</span></p>
        <p class="Standard" style="text-align:center;">&nbsp;Комунальне підприємство &ldquo;Бюро технічної інвентаризації&rdquo; Одеської міської ради</p>
        <p class="Standard" style="text-align:center;">р/р UA 57 328209 0000026007312485201 ПАТ Акціонерний Банк &ldquo;Південний&rdquo;</p>
        <p class="Standard" style="text-align:center;">МФО 328209, код ЄДРПОУ 03350290, вул. Троїцька, 25, м. Одеса, 65048</p>
        <p class="Standard">&nbsp;</p>
        <p class="Standard" align="center">Рахунок за виконання робіт за замовленням</p>
        <p class="Standard" style="line-height:150%;" align="center"> № {{$code}} від {{$created_at}}</p>
        <p class="Standard"><strong>Адреса:</strong> {{$city}} {{$address}} {{$house_number}} {{$house_building}} {{$apartment}} {{$office}}</p>
        <p class="Standard"><strong>Замовник:</strong> {{$personal_data}}</p>
        <p class="Standard" style="text-align:justify;"><strong>Вид робіт:</strong> <strong>&ldquo;Надання копій з інвентаризаційної або реєстраційної справи стосовно юридичних осіб&rdquo;.</strong></p>
        <p class="Standard" style="text-align:justify;"><strong><span style="color:#333333;">Сума:</span></strong><span style="color:#333333;">{{$sum}} грн.</span></p>
        <p class="Standard" style="text-align:justify; line-height:150%;"><span style="color:#333333;">&nbsp;</span></p>
        <p class="Standard" style="text-align:justify; line-height:150%;"><span style="color:#333333;">&nbsp;</span></p>
        <p style="font-size:8px; page-break-after: always;">&nbsp;</p>

        <p style="text-align:center; font-size:8px;">Акт виконаних робіт</p>
        <p style="text-align:center; font-size:8px;">договір № {{$code}} від {{$created_at}} на суму {{$sum}} грн.</p>
        <p style="text-indent:28.35pt; text-align:justify; font-size:8px;">Ми, що нижче підписались, Замовник {{$personal_data}}, з однієї сторони та Виконавець з іншої сторони, склали цей Акт в тому, що Виконавцем повністю та в строк повинен виконати вид роботи &ldquo;Надання копій з інвентаризаційної або реєстраційної справи стосовно юридичних осіб &rdquo;, згідно з договором № {{$code}} від {{$created_at}} на суму {{$sum}} грн.</p>
        <table style="border: none;width:500.5pt;margin-left:-12pt;border-collapse:collapse;">
            <tbody>
                <tr style="height:62.75pt;">
                    <td style="width:10.05pt; border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><strong>№ з/п</strong></p>
                    </td>
                    <td style="width:100.3pt; border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><strong>Склад роботи</strong></p>
                    </td>
                    <td style="width:17.55pt; height:42.4pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <div style="height:42.4pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; overflow:hidden;">
                            <p style="margin-right:5.65pt; margin-left:5.65pt; text-align:center; widows:2; orphans:2; font-size:8px;"><strong>№ пункту із Збірника*</strong></p>
                        </div>
                    </td>
                    <td style="width:38.8pt; border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; font-size:8px;"><strong>Результат</strong></p>
                    </td>
                    <td style="width:17.55pt; height:42.4pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <div style="height:42.4pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; overflow:hidden;">
                            <p style="margin-right:5.65pt; margin-left:5.65pt; text-align:center; widows:2; orphans:2; font-size:8px;"><strong>Кількість хвилин</strong></p>
                        </div>
                    </td>
                    <td style="width:24.65pt; height:42.4pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <div style="height:42.4pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; overflow:hidden;">
                            <p style="margin-right:5.65pt; margin-left:5.65pt; text-align:center; font-size:8px;"><strong>Виконавець (норма часу) (год.)</strong></p>
                        </div>
                    </td>
                    <td style="width:24.6pt; height:42.4pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <div style="height:42.4pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; overflow:hidden;">
                            <p style="margin-right:5.65pt; margin-left:5.65pt; text-align:center; font-size:8px;"><strong>Контролер (норма часу) (год.)</strong></p>
                        </div>
                    </td>
                    <td style="width:45.9pt; height:42.4pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <div style="height:42.4pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; overflow:hidden;">
                            <p style="margin-right:5.65pt; margin-left:5.65pt; text-align:center; font-size:8px;"><strong>Разом за замовленням</strong><strong>&nbsp;&nbsp;</strong><strong>(норма часу) (год.)</strong></p>
                        </div>
                    </td>
                    <td style="width:48.75pt; height:42.4pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <div style="height:42.4pt; margin-right:auto; margin-left:auto; writing-mode:tb-rl; overflow:hidden;">
                            <p style="margin-right:5.65pt; margin-left:5.65pt; text-align:center; font-size:8px;"><strong>Вартість послуг (грн)</strong></p>
                        </div>
                    </td>
                </tr>
                <tr style="height:7.35pt;">
                    <td style="width:10.05pt; border-right:0.75pt solid #000000; border-left:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">1</p>
                    </td>
                    <td style="width:100.3pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="widows:2; orphans:2; font-size:8px;"><span style="">Приймання, укладання та реєстрація договору</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">&nbsp;</p>
                    </td>
                    <td style="width:38.8pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span><span style="">Договір</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">20</span></p>
                    </td>
                    <td style="width:24.65pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,333</span></p>
                    </td>
                    <td style="width:24.6pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span></p>
                    </td>
                    <td style="width:45.9pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,333</span></p>
                    </td>
                    <td style="width:48.75pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">{{$i1}}</span></p>
                    </td>
                </tr>
                <tr style="height:7.35pt;">
                    <td style="width:10.05pt; border-right:0.75pt solid #000000; border-left:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">2</p>
                    </td>
                    <td style="width:100.3pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="widows:2; orphans:2; font-size:8px;"><span style="">Виписка рахунків (електронна версія)</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">&nbsp;</p>
                    </td>
                    <td style="width:38.8pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">Рахунок</p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">5</span></p>
                    </td>
                    <td style="width:24.65pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,083</span></p>
                    </td>
                    <td style="width:24.6pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span></p>
                    </td>
                    <td style="width:45.9pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,083</span></p>
                    </td>
                    <td style="width:48.75pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">{{$i3}}</span></p>
                    </td>
                </tr>
                <tr style="height:21pt;">
                    <td style="width:10.05pt; border-right:0.75pt solid #000000; border-left:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">3</p>
                    </td>
                    <td style="width:100.3pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="widows:2; orphans:2; font-size:8px;"><span style="">Розшукування інвентаризаційно-реєстраційної справи, унесення в книгу обліку видачі з архіву з позначкою про повернення</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">&nbsp;</p>
                    </td>
                    <td style="width:38.8pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">Справа</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">33</span></p>
                    </td>
                    <td style="width:24.65pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,550</span></p>
                    </td>
                    <td style="width:24.6pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span></p>
                    </td>
                    <td style="width:45.9pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,550</span></p>
                    </td>
                    <td style="width:48.75pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">{{$i4}}</span></p>
                    </td>
                </tr>
                <tr style="height:21pt;">
                    <td style="width:10.05pt; border-right:0.75pt solid #000000; border-left:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">4</p>
                    </td>
                    <td style="width:100.3pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="widows:2; orphans:2; font-size:8px;"><span style="">Відбір необхідної інформації в інвентаризаційній та/або реєстраційної справи для складання довідки</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">&nbsp;</p>
                    </td>
                    <td style="width:38.8pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">Копії документів</p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">34</span></p>
                    </td>
                    <td style="width:24.65pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,567</span></p>
                    </td>
                    <td style="width:24.6pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span></p>
                    </td>
                    <td style="width:45.9pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,567</span></p>
                    </td>
                    <td style="width:48.75pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">{{$i5}}</span></p>
                    </td>
                </tr>
                <tr style="height:12.45pt;">
                    <td style="width:10.05pt; border-right:0.75pt solid #000000; border-left:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">5</p>
                    </td>
                    <td style="width:100.3pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="widows:2; orphans:2; font-size:8px;"><span style="">Складання проекту відповіді</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"></p>
                    </td>
                    <td style="width:38.8pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">Довідка</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">22</span></p>
                    </td>
                    <td style="width:24.65pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,367</span></p>
                    </td>
                    <td style="width:24.6pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style=""></span></p>
                    </td>
                    <td style="width:45.9pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,367</span></p>
                    </td>
                    <td style="width:48.75pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">{{$i6}}</span></p>
                    </td>
                </tr>
                <tr style="height:12.15pt;">
                    <td style="width:10.05pt; border-right:0.75pt solid #000000; border-left:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">6</p>
                    </td>
                    <td style="width:100.3pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="widows:2; orphans:2; font-size:8px;"><span style="">Зняття копій шляхом застосування копіювальної техніки</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">&nbsp;</p>
                    </td>
                    <td style="width:38.8pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">Сторінка</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:white;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">{{$i7}}</span></p>
                    </td>
                    <td style="width:24.65pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,005</span></p>
                    </td>
                    <td style="width:24.6pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span></p>
                    </td>
                    <td style="width:45.9pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:white;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">{{$i7}}</span></p>
                    </td>
                    <td style="width:48.75pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:white;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">{{$i7}}</span></p>
                    </td>
                </tr>
                <tr style="height:6.55pt;">
                    <td style="width:10.05pt; border-right:0.75pt solid #000000; border-left:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">7</p>
                    </td>
                    <td style="width:100.3pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="widows:2; orphans:2; font-size:8px;"><span style="">Видача документа замовнику</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">&nbsp;</p>
                    </td>
                    <td style="width:38.8pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">Документ</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">5</span></p>
                    </td>
                    <td style="width:24.65pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,083</span></p>
                    </td>
                    <td style="width:24.6pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span></p>
                    </td>
                    <td style="width:45.9pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,083</span></p>
                    </td>
                    <td style="width:48.75pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">{{$i8}}</span></p>
                    </td>
                </tr>
                <tr style="height:7.45pt;">
                    <td style="width:10.05pt; border-right:0.75pt solid #000000; border-left:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">8</p>
                    </td>
                    <td style="width:100.3pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="widows:2; orphans:2; font-size:8px;"><span style="">Складання акта виконання робіт</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">&nbsp;</p>
                    </td>
                    <td style="width:38.8pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">А<span style="">кт</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">5</span></p>
                    </td>
                    <td style="width:24.65pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,083</span></p>
                    </td>
                    <td style="width:24.6pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span></p>
                    </td>
                    <td style="width:45.9pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,083</span></p>
                    </td>
                    <td style="width:48.75pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">{{$i9}}</span></p>
                    </td>
                </tr>
                <tr style="height:7.45pt;">
                    <td style="width:10.05pt; border-right:0.75pt solid #000000; border-left:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">9</p>
                    </td>
                    <td style="width:100.3pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="widows:2; orphans:2; font-size:8px;">Таксування виконаних робіт (електронна версія)</p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">&nbsp;</p>
                    </td>
                    <td style="width:38.8pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">З<span style="">віт</span></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">5</span></p>
                    </td>
                    <td style="width:24.65pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,083</span></p>
                    </td>
                    <td style="width:24.6pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span></p>
                    </td>
                    <td style="width:45.9pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">0,083</span></p>
                    </td>
                    <td style="width:48.75pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">{{$i10}}</span></p>
                    </td>
                </tr>
                <tr style="height:6.85pt;">
                    <td style="width:10.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span></p>
                    </td>
                    <td style="width:100.3pt; border-right:0.75pt solid #000000; border-left:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><strong>Разом: (без ПДВ х 152 грн)</strong></p>
                    </td>
                    <td colspan="5" style="width:166.35pt; border-top:0.75pt solid #000000; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span></p>
                    </td>
                    <td style="width:45.9pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><strong>&nbsp;</strong></p>
                    </td>
                    <td style="width:48.75pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:white;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><strong>{{$total}}</strong></p>
                    </td>
                </tr>
                <tr style="height:4.15pt;">
                    <td style="width:10.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><strong>&nbsp;</strong></p>
                    </td>
                    <td style="width:100.3pt; border-right:0.75pt solid #000000; border-left:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">ПДВ 20%</p>
                    </td>
                    <td colspan="6" style="width:223.05pt; border-top:0.75pt solid #000000; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span></p>
                    </td>
                    <td style="width:48.75pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:white;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">{{floor($total*0.2)}}</span></p>
                    </td>
                </tr>
                <tr style="height:8.55pt;">
                    <td style="width:10.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span></p>
                    </td>
                    <td style="width:100.3pt; border-right:0.75pt solid #000000; border-left:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><strong>Разом: (з ПДВ х 182 грн)</strong></p>
                    </td>
                    <td colspan="6" style="width:223.05pt; border-top:0.75pt solid #000000; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span></p>
                    </td>
                    <td style="width:48.75pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:white;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><strong>{{floor($total+floor($total*0.2))}}</span></p>
                    </td>
                </tr>
                <tr style="height:5.9pt;">
                    <td style="width:10.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><strong>&nbsp;</strong></p>
                    </td>
                    <td style="width:100.3pt; border-right:0.75pt solid #000000; border-left:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><strong>З урахуванням коефіцієнту:</strong></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;">&nbsp;</p>
                    </td>
                    <td style="width:38.8pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><strong>(1 або 2)</strong></p>
                    </td>
                    <td style="width:17.55pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:white;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><strong>{{$coefiction}}</strong></p>
                    </td>
                    <td colspan="3" style="width:116.75pt; border-top:0.75pt solid #000000; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="widows:2; orphans:2; font-size:8px;"><span style="">&nbsp;</span></p>
                    </td>
                    <td style="width:48.75pt; border-right:0.75pt solid #000000; border-bottom:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle; background-color:#ffffff;">
                        <p style="text-align:center; widows:2; orphans:2; font-size:8px;"><strong><span style="background-color:white;">{{floor(($total+($total*0.2))*$coefiction)}}</span></strong></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p style="text-align:justify; font-size:8px;">*Збірник норм часу на роботи, що виконуються суб&rsquo;єктами господарювання, які здійснюють технічну інвентаризацію об&rsquo;єктів нерухомого майна, затвердженого наказом Державного комітету України з питань житлово-комунального господарства від 21.11.2003 № 198 (зі змінами).</p>
                <p style="font-size:8px;">&nbsp;</p>
                <p style="font-size:8px;">Послуги прийняв<span style="width:11.34pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span> <span style="width:33.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span>Послуги здав Виконавець в особі</p>
                <p style="font-size:8px;">{{$personal_data}}<span style="width:9pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span>директора Швець Н.В.</p>
                <p style="font-size:8px;">_________________________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="width:22.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span>_________________________</p>
                <p style="font-size:8px;">(підпис Замовника)<span style="width:4.39pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span> <span style="width:33.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span><span style="width:35.4pt; display:inline-block;">&nbsp;</span>(підпис Виконавця)</p>
                <p>&nbsp;</p>
    </div>
</body>

</html>
