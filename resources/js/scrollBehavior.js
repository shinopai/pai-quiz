const scrollBehavior = (to, from, savedPosition) => {

    if (savedPosition) {
        sessionStorage.setItem('positionTop', savedPosition.top);
        return savedPosition;
    } else {
        if (to.hash) {
            if (to.hash.indexOf("y-")) {
                let tmp = to.hash.split('-');
                return {
                    top: tmp[1]
                }
            } else {
                return {
                    top: 0
                }
            }
        } else {
            return {
                top: 0
            }
        }

    }

};

export default scrollBehavior
