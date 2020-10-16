import React, { useState, useEffect } from 'react';

import axios from 'axios';

import { API_URL } from '../Consts';
import UserInfoForm from './UserInfoForm';

function UserInfo() {
    const id = 1;
    const [details, setDetails] = useState({});

    useEffect(() => {
        async function fetchData() {
            const res = await axios(`${API_URL}/users/${id}`);
            setDetails(res.data);
        }
        fetchData();
    }, []);

    return (
        <div>
            <p className="font-weight-bold">Current reputation { details.reputation }</p>
            <p>{ details.name }</p>
            <UserInfoForm />
            <p>Joined on {details.created_at}</p>
        </div>
    );
}

export default UserInfo;
