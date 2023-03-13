if($('.advert_post_flag').html() == 'true') {
    let uav = navigator.userAgent;
    let infoxUrl = 'https://rb.infox.sg/json?id=26409&external=true ';
    let smi2Url = '';

    let allArray = [];
    let teaserUrl = window.location.href;

    let underPostTeasersArr = [];
    let endPostTeasersArr = [];
    let sidebarPostTeasersArr = [];
    let afterFirstParagrafTeasersArr = [];

    let utm = '';

    let firstPar = $(".article__text p:nth-of-type(1)");

    let curUrl = window.location.href;

    if (curUrl.includes('smi2') || curUrl.includes('infox') || curUrl.includes('lentainform')) {
        utm = 'teasertraf';
    }


    Promise.all([
        fetch(infoxUrl, {credentials: "include"}).catch(err => {
            console.log(err, 'err')
        })
    ]).then(function (responses) {
        try {
            if (responses) {
                return Promise.all(responses.map(function (response, reject) {
                    if (response.status !== 200) {
                        console.log('Looks like there was a problem. Status Code: ' + response.status);
                        return reject;
                    }
                    return response.json();
                }));
            } else {
                console.log('Looks like there was a problem. No data loaded');
            }

        } catch (e) {
            console.log('Looks like there was a problem. Couldn`t work with remote data');
        }
    }).then(function (data) {
        if (data.length > 0) {
            data.forEach(function (elem, index) {
                // ТИЗЕРКИ ПОД ПОСТОМ
                if (index == 0) {
                    let elems = elem.news ?? elem;
                    if (elems)
                        underPostTeasersArr = [...elems.slice(0, 4)];

                    underPostTeasersArr = underPostTeasersArr.map(function (item) {
                        let elem1 = {
                            title: item.title,
                            img: item.img ?? item.image,
                            link: item.link ?? item.url,
                            id: item.id,
                            zero_pixel: item.zero_pixel ?? ''
                        };
                        return elem1;
                    });

                    $('.jsondata_inf').each(function (i) {
                        $(this).children('.on-partner_list-link').attr('href', underPostTeasersArr[i].link);
                        $(this).children().children().children('.a-news-block__image').attr('src', underPostTeasersArr[i].img);
                        $(this).children().children().children('.on-partner_list-title').html(underPostTeasersArr[i].title);

                        let img = new Image();
                        img.async = true;
                        img.src = underPostTeasersArr[i].zero_pixel;

                        $(this).children('.loader-container').hide();
                        $(this).children('.on-partner_list-link').show();
                    })
                }
                ;
            })
        }
    });
}
