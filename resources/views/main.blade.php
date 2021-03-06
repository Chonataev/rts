@extends('layouts.layout')

@section('content')
    <div class="headerSlider">
        @for ( $i = 1; $i < 6; $i++ )
            <div class="headerSliderBlocks slid{{$i}}">
                <div class="headerText">
               <span>
                  Лицей при КГТУ им. И.Раззакова!
               </span>
                </div>
            </div>
        @endfor
    </div>
    <div class="mainBlocks">
        @if($errors->any())
            <h4 class="message-wrapper">
                {{$errors->first()}}
            </h4>
        @endif
        <div class="mainContentBlocks">
            <div class="mainBlockTitle">О лицее</div>
            <div class="mainBlockText">
                <div class="mainAboutLeftText">
                    <span>История лицея КГТУ им.И.Раззакова </span>
                    <br>
                    <br>
                    Лицей КГТУ им.И.Раззакова является юридическим лицом, осуществляет реализацию общеобразовательных
                    программ
                    основного общего и среднего общего образования, КГТУ им. И.Раззакова образован в 1994 году с целью
                    качественной
                    подготовки учащихся в системе непрерывного образования «школа-вуз-аспирантура», превышающего уровень
                    обязательных требований государственного образовательного стандарта, в условиях дифференцированного
                    обучения, допрофессиональной подготовки для дальнейшего обучения в КГТУ им.И.Раззакова, других вузах
                    Кыргызской Республики и СНГ, является частью общей образовательной системы Кыргызского
                    Государственного
                    Технического Университета им. И.Раззакова «школа-вуз-аспирантура», что позволяет наиболее оптимально
                    распределять акценты в образовательном процессе КГТУ, направленные на формирование творчески
                    активной личности.
                    Лицей имеет четко сформулированную миссию, на ее основе и утвержденных стратегических и текущих
                    планов,
                    соответствующих потребностям заинтересованных сторон.
                    <br>
                    <br>
                    В учебных планах лицея предусмотрено углубленное изучение математики, физики, химии, черчения,
                    информатики,
                    английского и кыргызского языков. В разработке учебных программ этих предметов вместе с учителями
                    лицея принимали
                    тивное участие преподаватели профилирующих кафедр вуза и рекомендованы школам республики В свободное
                    от учебы
                    время учащиеся занимаются в различных культурно-массовых мероприятиях. Большой популярностью
                    пользуются различные
                    конкурсы, на пример: на лучшее проведение праздника Нооруз, конкурс военно- патриотической песни,
                    состязания
                    между
                    классами в рамках КВН. Особой популярностью среди учащихся пользуются занятия военно-прикладными
                    видами спорта.
                </div>
                <div class="mainAboutImage">
                    <img src="public/image/aboutUs/aboutUs_2.jpg" alt="">
                </div>
                <div class="mainAboutRightText">
                    <span>Миссия лицея</span>
                    <br>
                    <br>
                    Создание условий для самореализации и осознанного личностного самоопределения
                    учеников в соответствии с их склонностями и интересами и подготовка выпускников
                    для получения профессиональных знаний в системе высшего образования, готовых к жизни в открытом
                    меняющемся мире.
                </div>
            </div>
            <div class="mainBlockMoreButton">
                <div class="mainContentLearnMore">Узнать больше</div>
            </div>
        </div>
    </div>

    <div class="mainBlocks">
        <div class="forParentsAndStudents">
            <div class="mainBlockTitle">Родителям/Ученикам</div>
            <div class="mainBlockText">
                <div class="contentForParents">
                    <span>Родителям</span>
                    <p>
                        <br><br>Лицей КГТУ осуществляет дополнительные образовательные услуги в соответствии с законом
                        “Об образовании” (гл. 1 ст. 1, гл.7 ст. 51) и устава лицея.
                        <br><br> В дополнительные образовательные услуги с обучающимся включаются индивидуальное или
                        групповая подготовка для поступления в ВУЗы республики по предметам, определенным индивидуальным
                        контрактом. Перечень дисциплин соответствует вступительным экзаменам в ВУЗ.
                        <br><br>Обучающимися могут быть как граждане Кыргызской республики, так и иностранные граждане,
                        имеющие не законченное среднее образование, а так же выпускники школ.
                        <br><br>Плата за обучение устанавливается в соответствии с УСТАВОМ лицея КГТУ и утверждается в
                        порядке определенным соответствующими с законами Кыргызской республики ( для граждан КР, для
                        граждан СНГ и для дальнего зарубежья).
                        <br><br>Прием иностранных граждан осуществляется только при наличии визы на “учебу”. По
                        окончании выдается сертификат свидетельствующий о прохождении обучения с выставлением оценок на
                        основании итоговой аттестации и в соответствии с требованиями, предъявляемыми к поступающим в
                        ВУЗЫ.
                        <br><br>Программы для обучения утверждаются педагогическим советом лицея КГТУ и рассчитаны на
                        3,6,9 месяцев.
                        <br><br>Зачисление происходит после:
                        <br><br>— подачи заявления
                        <br><br>— заключение договора
                        <br><br>— внесение платы за обучение
                        <br><br>Начало занятий по мере набора, комплектования групп, включающих до 20 человек, а с
                        иностранными гражданами не более 5-6 человек.
                        <br><br>Учащиеся обязаны соблюдать правила внутреннего распорядка учебного заведения, не
                        допускать порч имущества лицея. В случае порчи возместить материальный ущерб по полной стоимости
                        по ценам на день возмещения ущерба.
                        <br><br>Дополнительные образовательные услуги осуществляются силами учителей лицея и
                        преподавателями соответствующих кафедр на условиях почасовой оплаты.
                    </p>
                </div>
                <div class="contentForStudents">
                    <span>Ученикам</span>
                    <br>
                    <br>
                    <p>
                        В нашем лицее каждый день - это праздник. Хоть трудно, но интересно.<br> Лицей – это дом учения
                        и талантов.<br>
                        Каждый ученик – это будущий учёный, космонавт, врач, спортсмен и, конечно, учитель.<br>
                        Праздники в лицее всегда
                        проходят очень весело.<br> Учась в начальных классах, я мечтала стать лицеистской и вот моя
                        мечта осуществилась.<br> Это
                        большая ответственность. Всегда надо учить уроки, внимательно слушать учителя.<br> Ведь как
                        говорила наша учительница по русскому
                        языку, Людмила Васильевна:
                        «Если не будешь слушать учителя, то потеряешь половину знаний!».<br> И это правда.<br> Учите
                        всегда уроки и будьте настоящими лицеистами!
                    </p>
                </div>
            </div>
            <div class="mainBlockMoreButton">
                <div class="mainContentLearnMore">Узнать больше</div>
            </div>
        </div>
    </div>

@stop
