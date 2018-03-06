const apiDomain = Laravel.apiDomain;
export const siteName = Laravel.siteName;

export const api = {
	login: apiDomain + '/login',
    logout: apiDomain + '/logout',
	register: apiDomain + '/register',
	currentUser: apiDomain + '/user'
};