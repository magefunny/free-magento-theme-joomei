var config = {
    config: {
        mixins: {
            'mage/collapsible': {
                'js/mage/collapsible-mixin': true
            }
        }
    },
    map: {
        '*': {
            'unveil': 'js/jquery.unveil',
            'masonry': 'js/masonry.pkgd.min',
            'owlCarousel': 'js/owl.carousel',
            'maxHeightItems': 'js/max.height.items'
        }
    },
    deps: [
        "js/theme-js"
    ]
}