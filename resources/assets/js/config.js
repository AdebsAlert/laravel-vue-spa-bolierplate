const apiDomain = Laravel.apiDomain;
export const siteName = Laravel.siteName;

export const api = {
	login: apiDomain + '/login',
	register: apiDomain + '/register',
	currentUser: apiDomain + '/user'
};