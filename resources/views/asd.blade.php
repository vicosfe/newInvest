@extends('uniquepage')
@section('main')<!--  Уникальная страница -->
<section>
    @if(count($media))<div class="media" style="height: 432px;">@include('mediaSlide')</div>@endif
    <div class="objectivesProj">
        <h3>ЦЕЛЬ ПРОЕКТА</h3>
        <p>Создание в пригороде Махачкалы агроиндустриального кластера, объединяющего производственную и логистическую инфраструктуру, позволяющую в одном месте осуществлять консолидацию и переработку продовольственного сырья, упаковку, хранение и распределение готовой продукции.</p>
    </div>

    <div class="objectivesProj">
        <h3>Краткое описание проекта</h3>
        <p>Проектом предусмотрено строительство в поселке Богатыревка города Махачкалы агроиндустриального парка с централизованной внутренней системой управления и обслуживания на подготовленной площадке с подведенными до границ участка коммуникациями. В структуру агроиндустриального парка привлекаются резиденты со следующими проектами: современный тепличный комплекс площадью 3 га консервный мини - завод с системой шоковой заморозки овощей и фруктов фабрика инфрасушки овощей и фруктов холодильные вентилируемые склады для хранения и фасовки овощей и фруктов рассадный центр на площади 0,5 га производство зеленого фуража круглый год - 300 тонн мини - молочный модульный цех 5000 кг/сутки.</p>
    </div>

    <div class="objectivesProj">
        <h3>Условия реализации проекта</h3>
        <p>Для реализации инвестиционного проекта предлагается земельный участок площадью 10 га. с подведенной и удобной инфраструктурой, в том числе автомобильной дорогой с выездом на федеральную трассу М-29. Имеется возможность привлечения федеральных и региональных субсидий для реализации проекта.</p>
    </div>

    <div class="costProject">
        <h3>ОРИЕНТИРОВАЧНАЯ СТОИМОСТЬ ПРОЕКТА</h3>
        <p>500МЛН.РУБ</p>
        <button class="OpenPopUpForm">СТАТЬ ИНВЕСТОРОМ</button>
    </div>
</section>
<!--************************** PopUp form **************************-->
    <div class="goInvestForm">
        <div class="goInvestFormBlock">
            <h3>Стать инвестором <div class="goInvestFormBlockCloseForm"></div></h3>
            <div class="sendMessage">
                <p>Отправьте сообщение</p>
            </div>

            <form action="/messages/project" method="POST" class="goInvForm">
                {{csrf_field()}}
                <div class="goInvForm__group">   
                    <input type="text" name="goInvFormFIO"  required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Фамилия Имя Отчество</label>
                </div>


                <div class="goInvForm__group">      
                    <input type="email" name="goInvFormEmail" class="goInvFormEmail"  required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="goInvFormLabel">Email</label>
                </div>

                <div class="goInvForm__group">   
                    <input type="text" name="goInvFormCompany"  required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Компания</label>
                </div>

                <div class="goInvForm__group">   
                    <input type="text" name="goInvFormMessage"  required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Сообщение</label>
                </div>

                <label class="labelFile">
                    <div class="file">
                        <div class="file__img"><img src="/public/images/prikrepitFile.png" alt=""></div>
                        <div class="file__text">Прикрепить файл</div>
                    </div>
                    <input type="file" class="fileInpt">
                </label>
                
                <button type="submit" class="goInvForm__button">Отправить</button>

            </form>
        </div>
    </div>
    <!--********************* End PopUp form *********************-->
@stop