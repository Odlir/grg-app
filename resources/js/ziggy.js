const Ziggy = {
    "url": "http:\/\/localhost",
    "port": null,
    "defaults": {},
    "routes": {
        "login": {"uri": "login", "methods": ["GET", "HEAD"]},
        "logout": {"uri": "logout", "methods": ["POST"]},
        "password.request": {"uri": "forgot-password", "methods": ["GET", "HEAD"]},
        "password.reset": {"uri": "reset-password\/{token}", "methods": ["GET", "HEAD"], "parameters": ["token"]},
        "password.email": {"uri": "forgot-password", "methods": ["POST"]},
        "password.update": {"uri": "reset-password", "methods": ["POST"]},
        "register": {"uri": "register", "methods": ["GET", "HEAD"]},
        "user-profile-information.update": {"uri": "user\/profile-information", "methods": ["PUT"]},
        "user-password.update": {"uri": "user\/password", "methods": ["PUT"]},
        "password.confirmation": {"uri": "user\/confirmed-password-status", "methods": ["GET", "HEAD"]},
        "password.confirm": {"uri": "user\/confirm-password", "methods": ["POST"]},
        "two-factor.login": {"uri": "two-factor-challenge", "methods": ["GET", "HEAD"]},
        "two-factor.enable": {"uri": "user\/two-factor-authentication", "methods": ["POST"]},
        "two-factor.confirm": {"uri": "user\/confirmed-two-factor-authentication", "methods": ["POST"]},
        "two-factor.disable": {"uri": "user\/two-factor-authentication", "methods": ["DELETE"]},
        "two-factor.qr-code": {"uri": "user\/two-factor-qr-code", "methods": ["GET", "HEAD"]},
        "two-factor.secret-key": {"uri": "user\/two-factor-secret-key", "methods": ["GET", "HEAD"]},
        "two-factor.recovery-codes": {"uri": "user\/two-factor-recovery-codes", "methods": ["GET", "HEAD"]},
        "terms.show": {"uri": "terms-of-service", "methods": ["GET", "HEAD"]},
        "policy.show": {"uri": "privacy-policy", "methods": ["GET", "HEAD"]},
        "profile.show": {"uri": "user\/profile", "methods": ["GET", "HEAD"]},
        "other-browser-sessions.destroy": {"uri": "user\/other-browser-sessions", "methods": ["DELETE"]},
        "current-user-photo.destroy": {"uri": "user\/profile-photo", "methods": ["DELETE"]},
        "current-user.destroy": {"uri": "user", "methods": ["DELETE"]},
        "api-tokens.index": {"uri": "user\/api-tokens", "methods": ["GET", "HEAD"]},
        "api-tokens.store": {"uri": "user\/api-tokens", "methods": ["POST"]},
        "api-tokens.update": {"uri": "user\/api-tokens\/{token}", "methods": ["PUT"], "parameters": ["token"]},
        "api-tokens.destroy": {"uri": "user\/api-tokens\/{token}", "methods": ["DELETE"], "parameters": ["token"]},
        "teams.create": {"uri": "teams\/create", "methods": ["GET", "HEAD"]},
        "teams.store": {"uri": "teams", "methods": ["POST"]},
        "teams.show": {"uri": "teams\/{team}", "methods": ["GET", "HEAD"], "parameters": ["team"]},
        "teams.update": {"uri": "teams\/{team}", "methods": ["PUT"], "parameters": ["team"]},
        "teams.destroy": {"uri": "teams\/{team}", "methods": ["DELETE"], "parameters": ["team"]},
        "current-team.update": {"uri": "current-team", "methods": ["PUT"]},
        "team-members.store": {"uri": "teams\/{team}\/members", "methods": ["POST"], "parameters": ["team"]},
        "team-members.update": {
            "uri": "teams\/{team}\/members\/{user}",
            "methods": ["PUT"],
            "parameters": ["team", "user"]
        },
        "team-members.destroy": {
            "uri": "teams\/{team}\/members\/{user}",
            "methods": ["DELETE"],
            "parameters": ["team", "user"]
        },
        "team-invitations.accept": {
            "uri": "team-invitations\/{invitation}",
            "methods": ["GET", "HEAD"],
            "parameters": ["invitation"]
        },
        "team-invitations.destroy": {
            "uri": "team-invitations\/{invitation}",
            "methods": ["DELETE"],
            "parameters": ["invitation"]
        },
        "sanctum.csrf-cookie": {"uri": "sanctum\/csrf-cookie", "methods": ["GET", "HEAD"]},
        "ignition.healthCheck": {"uri": "_ignition\/health-check", "methods": ["GET", "HEAD"]},
        "ignition.executeSolution": {"uri": "_ignition\/execute-solution", "methods": ["POST"]},
        "ignition.updateConfig": {"uri": "_ignition\/update-config", "methods": ["POST"]},
        "dashboard": {"uri": "dashboard", "methods": ["GET", "HEAD"]},
        "person.index": {"uri": "people", "methods": ["GET", "HEAD"]},
        "person.create": {"uri": "people\/create", "methods": ["GET", "HEAD"]},
        "person.store": {"uri": "people", "methods": ["POST"]},
        "person.show": {
            "uri": "people\/{person}\/edit",
            "methods": ["GET", "HEAD"],
            "parameters": ["person"],
            "bindings": {"person": "id"}
        },
        "person.update": {"uri": "people\/update", "methods": ["POST"]},
        "person.destroy": {
            "uri": "people\/{person}\/delete",
            "methods": ["GET", "HEAD"],
            "parameters": ["person"],
            "bindings": {"person": "id"}
        },
        "product.index": {"uri": "products", "methods": ["GET", "HEAD"]},
        "product.create": {"uri": "products\/create", "methods": ["GET", "HEAD"]},
        "product.store": {"uri": "products", "methods": ["POST"]},
        "product.show": {
            "uri": "products\/{products}\/edit",
            "methods": ["GET", "HEAD"],
            "parameters": ["product"],
            "bindings": {"product": "id"}
        },
        "product.update": {"uri": "products\/update", "methods": ["POST"]},
        "product.destroy": {
            "uri": "products\/{product}\/delete",
            "methods": ["GET", "HEAD"],
            "parameters": ["product"],
            "bindings": {"product": "id"}
        }
    }
};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export {Ziggy};
