import React, { useState, useEffect } from 'react';

import axios from 'axios';
import styled from 'styled-components';

import { API_URL } from '../../Consts';
import DetailsForm from './DetailsForm';

const EditButton = styled.button`
    padding: 0;
`;

function Details() {
    const id = 1;
    const [details, setDetails] = useState({});
    const [isEditingName, setIsEditingName] = useState(false);

    useEffect(() => {
        async function fetchData() {
            const res = await axios(`${API_URL}/users/${id}`);
            setDetails(res.data);
        }
        fetchData();
    }, []);

    const toggleEditName = () => {
        setIsEditingName(!isEditingName);
    }

    return (
        <div>
            <p className="font-weight-bold">Current reputation { details.reputation }</p>
            <p>{ details.name } <EditButton className="btn btn-link" onClick={toggleEditName}>(Edit)</EditButton></p>
            { isEditingName && <DetailsForm toggleEditName={toggleEditName}/>}
            <p>Joined on {details.created_at}</p>
        </div>
    );
}

export default Details;
