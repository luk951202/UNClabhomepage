var SETTINGS = {
    VER : "1.0",
    WIDTH : 600,
    HEIGHT : 400,
    BORDER_WIDTH : 10,
    BACKGROUND_COLOR : "#FFFFFF",
    PLAYER : {
        WIDTH : 20,
        HEIGHT : 80,
        GAP : 30
    },
    BALL : {
        WIDTH : 15,
        HEIGHT : 15,
    },
    NET : {
        WIDTH : 6
    },
    SCORE : {
        Y : 40,
        SIZE : 30,
        GAP : 50
    },
    EDGE_SHOOT_ANGLE_ADJUST : 10,
    EDGE_ANGLE : 6,
    STRAIGHT_ADJUST : 7,
    STRATGHT_ANGLE : 7,
    SERVE_ANGLE : 30,
    GOAL : 5
};
SETTINGS.CLIENT_SETTINGS = {
    VER : SETTINGS.VER,
    WIDTH : SETTINGS.WIDTH,
    HEIGHT : SETTINGS.HEIGHT,
    BORDER_WIDTH : SETTINGS.BORDER_WIDTH,
    BACKGROUND_COLOR : SETTINGS.BACKGROUND_COLOR,
    NET : SETTINGS.NET
};

module.exports = SETTINGS;