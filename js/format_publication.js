function button_clicked(element) {

    if (element.id == "article_btn") {

    } else if (element.id == "conference_btn") {
      $(".publication_count_na").css("display", "list-item");
    }

    $(element).css("display", "none");

}
