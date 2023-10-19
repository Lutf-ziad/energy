@extends('layout.main')

@section('content')
<section class="newsroom-filter" id="blog-filters">
    <div class="parts-landing-section">
        <div class="parts-container">
            <div class="container">
                <div class="parts-form-wrapper">
                    <form action="" method="POST">
                        <div class="form-selectors">
                            <div class="select-big-div div-year">
                                <select name="year" id="year" class="year-select2 select-wrapper">
                                    <option value="" disabled="" selected="">السنة</option>
                                                                            <option value=" ">الكل</option>
                                    <option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option>                                </select>
                            </div>
                            <div class="select-big-div div-month">
                                <select name="month" id="month" class="month-select2 select-wrapper">
                                    <option value="">الشهر</option>
                                                                            <option value=" ">الكل</option>
                                    <option value="1">JANUARY</option><option value="2">FEBRUARY</option><option value="3">MARCH</option><option value="4">APRIL</option><option value="5">MAY</option><option value="6">JUNE</option><option value="7">JULY</option><option value="8">AUGUST</option><option value="9">SEPTEMBER</option><option value="10">OCTOBER</option><option value="11">NOVEMBER</option><option value="12">DECEMBER</option>                                </select>
                            </div>
                            <div class="select-big-div div-category">
                                <select name="category" id="category" class="category-select2 select-wrapper">
                                    <option value="">التصنيف</option>
                                                                                <option value=" ">الكل</option>
                                        <option value="15">Uncategorized</option><option value="71">الاستدامة</option><option value="49">الجوائز</option><option value="55">الرعاية</option><option value="52">الشراكة</option><option value="79">انجازات</option><option value="77">اهم الأخبار</option><option value="46">رياضات</option>                                </select>
                            </div>

                            <div class="select-big-div div-search search-bar hide-mobile">
                            <input type="text" name="post_search" id="post_search" placeholder="البحث بالكلمة الرئيسية  ...">
                            <a href="#" class="search-icon" id="custom-button">
                                <img decoding="async" alt="Search icon" src="{{ asset('themes/petromin/assets/build/images/misc-svg/search-black.svg') }}">
                            </a>
                        </div>
                        <div class="select-big-div-showresult div-show search-bar hide-mobile" id="custom-button">
                            <div name="engine" id="engine" class="select-wrapper">
                            ابحث عن البطاريه                                <a href="#" class="search-icon">
                                    <img decoding="async" alt="Search icon" src="{{ asset('themes/petromin/assets/build/images/misc-svg/result-arrow.svg') }}">
                                </a>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="newsroom-section">
    <div class="services-listing">
        <div class="container" id="blog-list"><div class="express-listing"><div class="services-wrapper"><div class="services-card">
						<a href=" ">
						<div class="part-container">
							<div class="part-wrap new-part"><img src="{{ asset('uploads/new9.jpeg') }}" alt=""></div>
							<div class="components"><div class="category"></div><div class="title">
								 و هندوستان يشكلان شراكة استراتيجية مبتكرة في قمة مجموعة العشرين في عام 2023
							</div>
							<div class="text">شركة  تعلن بسعادة عن شراكة استراتيجية رائدة تم التوصل إليها مع شركة   المحدودة (إتش بي سي إل)، والتي تم تأكيدها خلال قمة مجموعة العشرين التاريخية لعام 2023. &nbsp;تضم هذه الشراكة ثلاثة مجالات رئيسية : محطات الوقود والبنية تحتية لشحن البطاريات الكهربائية ومراكز خدمة  إكسبريس، والتي تعد جاهزة لتحقيق موجة جديدة من
							</div><div class="date">Sep 2023
								</div><div class="read-more">اقرأ المزيد</div></div>
                            </div></a>
                        </div>														<div class="services-card">
						<a href=" ">
						<div class="part-container">
							<div class="part-wrap new-part"><img src="{{ asset('uploads/new8.jpeg') }}" alt=""></div>
							<div class="components"><div class="category"></div><div class="title">
								 إكسبريس ونيكسن يتعاونان لتقديم خدمات صيانة متميزة في المملكة العربية السعودية
							</div>
							<div class="text">نتقدم بخطى ثابتة نحو رؤية مشتركة للابتكار الموجه نحو العملاء في خدمات البطاريات، حيث تشكل شركة  إكسبرس الرائدة عالمياً في العناية بالبطاريات، التي تمتلك أكثر من 650 مركز صيانة، مع شركة سعيد العمودي المحدودة الوكيل الحصري لشركة تصنيع الإطارات الرائدة “نيكسين يشكّلان شراكة مميزة لإعادة تعريف تجربة خدمة البطاريات  في المملكة العربية السعودية. سيتم
							</div><div class="date">Aug 2023
								</div><div class="read-more">اقرأ المزيد</div></div>
                            </div></a>
                        </div>														<div class="services-card">
						<a href="/">
						<div class="part-container">
							<div class="part-wrap new-part"><img src="{{ asset('uploads/new7.jpeg') }}" alt=""></div>
							<div class="components"><div class="category"></div><div class="title">
								 تطلق أول شبكة شحن بطاريات كهربائية (DC) فائقة السرعة في المملكة العربية السعودية
							</div>
							<div class="text">أعلنت شركة  وهي مزود حلول التنقل الذكي التابعة لمجموعة ، عن إطلاق شواحن تيار مستمر إضافة إلى الشبكة الحالية للتيار المتردد لأول مرة في المملكة العربية السعودية ليتم إنشائها في مواقع استراتيجية في المنطقة وإنشاء مسارات شحن تربط المدن الرئيسية لتعزيز التنقل الكهربائي في المملكة. &nbsp;ستتم إضافة شواحن التيار المستمر هذه إلى الشبكة الحالية
							</div><div class="date">Jul 2023
								</div><div class="read-more">اقرأ المزيد</div></div>
                            </div></a>
                        </div>														</div><div class="services-wrapper"><div class="services-card">
						<a href=" ">
						<div class="part-container">
							<div class="part-wrap new-part"><img src="{{ asset('uploads/new6.jpeg') }}" alt=""></div>
							<div class="components"><div class="category"></div><div class="title">
								 تعلن عن افتتاح مركز للمركبات التجارية الرائد في الرياض بالتعاون مع بوش وميشلان
							</div>
							<div class="text">تفخر  الشركة السعودية الرائدة في مجال حلول التنقل ، بالإعلان عن الافتتاح الكبير لمركز  للمركبات التجارية ( عناية مركبات النقل) في المراكز التجارية الرائده في الرياض ، المملكة العربية السعودية،&nbsp; أقيم هذا الحدث المهم في 19 يونيو 2023 ، حيث جمع عملاء كبار الشخصيات وشخصيات مؤثرة من صانعين النقل والخدمات اللوجستية بالتعاون مع
							</div><div class="date">Jul 2023
								</div><div class="read-more">اقرأ المزيد</div></div>
                            </div></a>
                        </div>														<div class="services-card">
						<a href=" ">
						<div class="part-container">
							<div class="part-wrap new-part"><img src="{{ asset('uploads/new10.jpeg') }}" alt=""></div>
							<div class="components"><div class="category"></div><div class="title">
								 إكسبريس الهند وشركة إتش بي سي إل ، يستعدان لإنشاء 1,000 مركز خدمة سريعة في الهند.
							</div>
							<div class="text">بهدف تلبية احتياجات العملاء للمركبات المكونه من عجلتين وثلاث وأربع عجلات ، أقامت  إكسبريس الهند شراكة مع شركة إتش بي سي إللإنشاء حوالي 1000 مركز خدمة بطاريات في منافذ البيع بالتجزئة التابعة لها في الهند. تعمل  في المملكة العربية السعودية منذ عام 1968 ، وهي الشركة الرائدة في مجال حلول تنقل البطاريات و
							</div><div class="date">Jul 2023
								</div><div class="read-more">اقرأ المزيد</div></div>
                            </div></a>
                        </div>														<div class="services-card">
						<a href=" ">
						<div class="part-container">
							<div class="part-wrap new-part"><img src="{{ asset('uploads/new5.jpeg') }}" alt=""></div>
							<div class="components"><div class="category"></div><div class="title">
								تتعاون الشركة الوطنية لحلول النقل و بوش لإنشاء مراكز تجارية في المراكز التجارية الرئيسية في المملكة العربية السعودية
							</div>
							<div class="text">في إنجاز آخر شرعت الشركة الوطنية لحلول النقل التابعه لمجموعة  في رحلة لتمكين عملاء البطاريات التجارية للحصول على خدمات عالية الجودة من خلال المراكز المخصصه لصيانة البطاريات التجارية –  رعاية البطاريات التجارية. بصفتها المزود الرائد لعدد من العلامات التجارية للخدمة والصيانة لقطاع النقل التجاري والخدمات اللوجستية في المملكة العربية السعودية وقعت شركة
							</div><div class="date">Jun 2023
								</div><div class="read-more">اقرأ المزيد</div></div>
                            </div></a>
                        </div>														</div><div class="services-wrapper"><div class="services-card">
						<a href=" ">
						<div class="part-container">
							<div class="part-wrap new-part"><img src="{{ asset('uploads/new8.jpeg') }}" alt=""></div>
							<div class="components"><div class="category"></div><div class="title">
								الشركة الوطنية لإدارة الأسطول تتعاون مع شركة مسار للحلول من أجل التنقل المستدام في المملكة العربية السعودية.
							</div>
							<div class="text">يسر الشركة الوطنية لإدارة الأسطول التابعة لمجموعة  وشركة مسار وهي شركة إقليمية كبرى لحلول التنقل مقرها أبوظبي ، الإعلان عن اتفاقية تعاون متعددة الأوجه لتوفير مجموعة لا مثيل لها من حلول التنقل الفريدة للأعمال للشركات في المملكة العربية السعودية. تشمل هذه الشراكة الحلول التأجيريه و التشغيليه المبتكره وخدمات إدارة الأسطول الكاملة للعملاء من الشركات
							</div><div class="date">May 2023
								</div><div class="read-more">اقرأ المزيد</div></div>
                            </div></a>
                        </div>														<div class="services-card">
						<a href=" ">
						<div class="part-container">
							<div class="part-wrap new-part"><img src="{{ asset('uploads/new10.jpeg') }}" alt=""></div>
							<div class="components"><div class="category"></div><div class="title">
								فوربس الشرق الأوسط تعترف بال ضمن أفضل 10 شركات بيئية مستدامة وتوريد لشركات الاحتياجات الأساسية في المملكة العربية السعودية
							</div>
							<div class="text">إنه لشرف كبير أن يتم الاعتراف به من قبل منصات مرموقة مثل فوربس الشرق الأوسط لجهودنا على لتعزيز الممارسات المستدامة وأسلوب الحياة الصديق للبيئة داخل المنطقة. تم إدراج  في قائمة أفضل 10 شركات للبيئة المستدامة وتوفير الاحتياجات الأساسية في المملكة العربية السعودية ، ولا يمكننا أن نكون أكثر فخراً!  هو مزود سمارت موبليتي
							</div><div class="date">Apr 2023
								</div><div class="read-more">اقرأ المزيد</div></div>
                            </div></a>
                        </div>														<div class="services-card">
						<a href=" ">
						<div class="part-container">
							<div class="part-wrap new-part"><img src="{{ asset('uploads/new10.jpeg') }}" alt=""></div>
							<div class="components"><div class="category"></div><div class="title">
								 ووزارة النقل والخدمات اللوجيستية تفتتحان تشغيل خدمة النقل المكوكية المستقلة في المملكة العربية السعودية في واجهة الأعمال بالرياض
							</div>
							<div class="text">في إنجاز آخر من كهربة المملكة العربية السعودية ، تعمل وهي شركة حلول للتنقل الإلكتروني والتابعة لمجموعة  ، على تمكين وزارة النقل والخدمات اللوجستية من تجربة عملية نقل مكوكية مستقلة في واجهة أعمال الرياض والمملوكة لشركة روشن المطور العقاري الرائد في الدولة. سيتم تشغيل المكوك المستقل بالكامل الذي تنتجه Navya والمدعوم من لمدة أربعة
							</div><div class="date">Apr 2023
								</div><div class="read-more">اقرأ المزيد</div></div>
                            </div></a>
                        </div>														</div></div><ul class="custom-pagination"><li class="disabled">
					<a href="https:///news-blog/?pg=1" class="disabled" title="Previous page" tabindex="-1">
						<img src=" {{ asset('themes/petromin/assets/build/images/services/pagination-arrow.svg') }}" alt="pagination arrow">
					</a>
				</li><li class="active"><span aria-current="page" class="page-numbers current">1</span></li><li class=""><a class="page-numbers" href="https:///news-blog/?pg=2">2</a></li><li class=""><a class="page-numbers" href="https:///news-blog/?pg=3">3</a></li><li class=""><a class="page-numbers" href="https:///news-blog/?pg=4">4</a></li><li class="">
					<a href="https:///news-blog/?pg=2" class="" title="Next page">
					<img src="{{ asset('themes/petromin/assets/build/images/services/pagination-arrow1.svg') }}" alt="pagination arrow">
					</a>
				</li></ul></div>
        <div class="d-flex justify-content-center list-load-wrapper">
            <div class="dot-pulse-wrapper">
                <span class="dot-pulse"></span>
            </div>
        </div>
        <input type="hidden" name="page" value="">
        <input type="hidden" name="limit" value="9">
        <input type="hidden" name="exclude_cat" value="[71,77]">
        <input type="hidden" name="current_lang" value="ar">
    </div>
</section>
@endsection
